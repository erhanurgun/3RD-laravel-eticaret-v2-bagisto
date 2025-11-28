<?php

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Stevebauman\Purify\Facades\Purify;
use Webkul\Core\Facades\Acl;
use Webkul\Core\Facades\Core;
use Webkul\Core\Facades\Menu;
use Webkul\Core\Facades\SystemConfig;

if (! function_exists('core')) {
    /**
     * Core helper.
     *
     * @return \Webkul\Core\Core
     */
    function core()
    {
        return Core::getFacadeRoot();
    }
}

if (! function_exists('menu')) {
    /**
     * Menu helper.
     *
     * @return \Webkul\Core\Menu
     */
    function menu()
    {
        return Menu::getFacadeRoot();
    }
}

if (! function_exists('acl')) {
    /**
     * Acl helper.
     *
     * @return \Webkul\Core\Acl
     */
    function acl()
    {
        return Acl::getFacadeRoot();
    }
}

if (! function_exists('system_config')) {
    /**
     * System Config helper.
     *
     * @return \Webkul\Core\SystemConfig
     */
    function system_config()
    {
        return SystemConfig::getFacadeRoot();
    }
}

if (! function_exists('clean_path')) {
    /**
     * Clean path.
     */
    function clean_path(string $path): string
    {
        return collect(explode('/', $path))
            ->filter(fn ($segment) => ! empty($segment))
            ->join('/');
    }
}

if (! function_exists('clean_content')) {
    /**
     * Clean content.
     */
    function clean_content(string $content): string
    {
        $cleaned = Purify::clean($content);

        $patterns = [
            '/\{\{.*?\}\}/',
            '/\{!!.*?!!\}/',
            '/@(php|if|else|endif|foreach|endforeach|for|endfor|while|endwhile|switch|endswitch|case|break|continue|include|extends|section|endsection|yield|push|endpush|stack|endstack)/',
            '/<\?php.*?\?>/s',
        ];

        foreach ($patterns as $pattern) {
            $cleaned = preg_replace($pattern, '', $cleaned);
        }

        $cleaned = str_replace(
            ['{{', '}}', '{!!', '!!}'],
            ['&#123;&#123;', '&#125;&#125;', '&#123;!!', '!!&#125;'],
            $cleaned
        );

        return $cleaned;
    }
}

if (! function_exists('dev_info')) {
    /**
     * Geliştirici bilgilerini API'den alır ve cache'ler.
     * Cache süresi: 7 gün
     *
     * @param  string|null  $key  Dönen veriden belirli bir alan (full_name, website, vb.)
     * @return mixed
     */
    function dev_info(?string $key = null): mixed
    {
        $cacheKey = 'dev_info_orizora';
        $cacheTtl = 60 * 60 * 24 * 7; // 7 gün

        $data = Cache::remember($cacheKey, $cacheTtl, function () {
            try {
                $response = Http::timeout(5)
                    ->get('https://erhanurgun.tr/api/v1/dev-info', [
                        'username' => 'orizora',
                    ]);

                if ($response->successful()) {
                    $json = $response->json();

                    if (isset($json['status']['code']) && $json['status']['code'] === 200 && ! empty($json['data'][0])) {
                        return $json['data'][0];
                    }
                }
            } catch (\Exception $e) {
                // API hatası durumunda varsayılan değerleri döndür
            }

            // Varsayılan değerler (API erişilemezse)
            return [
                'image'     => null,
                'full_name' => 'Orizora LLC',
                'username'  => 'orizora',
                'email'     => 'orizora.soft@gmail.com',
                'phone'     => null,
                'job_title' => 'Yazılım Şirketi',
                'website'   => 'https://orizora.com',
            ];
        });

        if ($key !== null) {
            return $data[$key] ?? null;
        }

        return $data;
    }
}

if (! function_exists('array_permutation')) {
    function array_permutation($input)
    {
        $results = [];

        foreach ($input as $key => $values) {
            if (empty($values)) {
                continue;
            }

            if (empty($results)) {
                foreach ($values as $value) {
                    $results[] = [$key => $value];
                }
            } else {
                $append = [];

                foreach ($results as &$result) {
                    $result[$key] = array_shift($values);

                    $copy = $result;

                    foreach ($values as $item) {
                        $copy[$key] = $item;
                        $append[] = $copy;
                    }

                    array_unshift($values, $result[$key]);
                }

                $results = array_merge($results, $append);
            }
        }

        return $results;
    }
}
