<?php

return [
    'seeders' => [
        'attribute' => [
            'attribute-families' => [
                'default' => 'Varsayılan',
            ],

            'attribute-groups' => [
                'description'      => 'Açıklama',
                'general'          => 'Genel',
                'inventories'      => 'Envanterler',
                'meta-description' => 'Meta Açıklama',
                'price'            => 'Fiyat',
                'settings'         => 'Ayarlar',
                'shipping'         => 'Nakliye',
            ],

            'attributes' => [
                'brand'                => 'Marka',
                'color'                => 'Renk',
                'cost'                 => 'Maliyet',
                'description'          => 'Açıklama',
                'featured'             => 'Öne Çıkan',
                'guest-checkout'       => 'Misafir Ödeme',
                'height'               => 'Yükseklik',
                'length'               => 'Uzunluk',
                'manage-stock'         => 'Stoğu Yönet',
                'meta-description'     => 'Meta Açıklama',
                'meta-keywords'        => 'Meta Anahtar Kelimeler',
                'meta-title'           => 'Meta Başlık',
                'name'                 => 'Ad',
                'new'                  => 'Yeni',
                'price'                => 'Fiyat',
                'product-number'       => 'Ürün Numarası',
                'short-description'    => 'Kısa Açıklama',
                'size'                 => 'Boyut',
                'sku'                  => 'Stok Kodu',
                'special-price'        => 'Özel Fiyat',
                'special-price-from'   => 'Özel Fiyat Başlangıç',
                'special-price-to'     => 'Özel Fiyat Bitiş',
                'status'               => 'Durum',
                'tax-category'         => 'Vergi Kategorisi',
                'url-key'              => 'URL Anahtarı',
                'visible-individually' => 'Tek Tek Görünür',
                'weight'               => 'Ağırlık',
                'width'                => 'Genişlik',
            ],

            'attribute-options' => [
                'black'  => 'Siyah',
                'green'  => 'Yeşil',
                'l'      => 'L',
                'm'      => 'M',
                'red'    => 'Kırmızı',
                's'      => 'S',
                'white'  => 'Beyaz',
                'xl'     => 'XL',
                'yellow' => 'Sarı',
            ],
        ],

        'category' => [
            'categories' => [
                'description' => 'Kök Kategori Açıklaması',
                'name'        => 'Kök',
            ],
        ],

        'cms' => [
            'pages' => [
                'about-us' => [
                    'content' => '<h2>Biz Kimiz?</h2>
<p>Türkiye\'nin önde gelen e-ticaret platformlarından biri olarak, müşterilerimize en kaliteli ürünleri en uygun fiyatlarla sunmayı hedefliyoruz. Yılların deneyimiyle sektörde güvenilir bir marka haline geldik.</p>

<h3>Misyonumuz</h3>
<p>Müşterilerimize güvenli, hızlı ve kolay bir alışveriş deneyimi sunarak, online alışverişi herkes için erişilebilir kılmak. Her ürünümüzde kaliteyi, her hizmetimizde mükemmelliği hedefliyoruz.</p>

<h3>Vizyonumuz</h3>
<p>Türkiye\'nin en güvenilir ve tercih edilen e-ticaret platformu olmak. Teknolojik yeniliklerle sürekli gelişerek, müşterilerimize en iyi alışveriş deneyimini yaşatmak.</p>

<h3>Değerlerimiz</h3>
<ul>
<li><strong>Güvenilirlik:</strong> Müşteri güveni bizim için her şeyden önemlidir.</li>
<li><strong>Kalite:</strong> Satışa sunduğumuz her ürün titizlikle seçilir.</li>
<li><strong>Müşteri Odaklılık:</strong> Müşteri memnuniyeti önceliğimizdir.</li>
<li><strong>Şeffaflık:</strong> Tüm süreçlerimizde açık ve dürüst iletişim.</li>
<li><strong>Yenilikçilik:</strong> Sürekli gelişim ve teknolojik yenilikler.</li>
</ul>

<h3>Neden Bizi Tercih Etmelisiniz?</h3>
<ul>
<li>Geniş ürün yelpazesi ve kaliteli markalar</li>
<li>Güvenli ödeme seçenekleri</li>
<li>Hızlı ve ücretsiz kargo fırsatları</li>
<li>7/24 müşteri desteği</li>
<li>Kolay iade ve değişim imkanı</li>
<li>Düzenli kampanya ve indirimler</li>
</ul>',
                    'title'   => 'Hakkımızda',
                ],

                'contact-us' => [
                    'content' => '<h2>Bizimle İletişime Geçin</h2>
<p>Sorularınız, önerileriniz veya şikayetleriniz için bizimle iletişime geçmekten çekinmeyin. Müşteri memnuniyeti ekibimiz size yardımcı olmaktan mutluluk duyacaktır.</p>

<h3>İletişim Bilgilerimiz</h3>
<ul>
<li><strong>E-posta:</strong> destek@magazamiz.com</li>
<li><strong>Telefon:</strong> 0850 XXX XX XX</li>
<li><strong>WhatsApp:</strong> 0532 XXX XX XX</li>
<li><strong>Çalışma Saatleri:</strong> Pazartesi - Cumartesi, 09:00 - 18:00</li>
</ul>

<h3>Adresimiz</h3>
<p>Örnek Mahallesi, Örnek Caddesi No:123<br>
Kadıköy / İstanbul, Türkiye<br>
Posta Kodu: 34000</p>

<h3>Sıkça Sorulan Konular</h3>
<ul>
<li><strong>Sipariş takibi:</strong> Hesabınızdan veya kargo takip numaranızla siparişinizi takip edebilirsiniz.</li>
<li><strong>İade işlemleri:</strong> İade taleplerinizi hesabınız üzerinden oluşturabilirsiniz.</li>
<li><strong>Ödeme sorunları:</strong> Ödeme ile ilgili sorunlarınız için destek ekibimizle iletişime geçin.</li>
</ul>

<p>Mesajlarınıza en geç 24 saat içinde yanıt veriyoruz. Acil durumlarda telefon hattımızı tercih edebilirsiniz.</p>',
                    'title'   => 'Bize Ulaşın',
                ],

                'customer-service' => [
                    'content' => '<h2>Müşteri Hizmetleri</h2>
<p>Alışveriş deneyiminizi en iyi hale getirmek için buradayız. Profesyonel müşteri hizmetleri ekibimiz, tüm sorularınızı yanıtlamak ve sorunlarınızı çözmek için hazır.</p>

<h3>Size Nasıl Yardımcı Olabiliriz?</h3>

<h4>Sipariş İşlemleri</h4>
<ul>
<li>Sipariş oluşturma ve onay süreçleri</li>
<li>Sipariş değişikliği ve iptal işlemleri</li>
<li>Sipariş takibi ve kargo bilgileri</li>
<li>Fatura talepleri ve düzenlemeleri</li>
</ul>

<h4>Ürün Bilgileri</h4>
<ul>
<li>Ürün özellikleri ve teknik detaylar</li>
<li>Stok durumu sorgulama</li>
<li>Ürün karşılaştırma desteği</li>
<li>Beden ve ölçü rehberliği</li>
</ul>

<h4>Ödeme ve Finans</h4>
<ul>
<li>Ödeme yöntemleri hakkında bilgi</li>
<li>Taksit seçenekleri</li>
<li>İade ve para iadesi süreçleri</li>
<li>Fatura ve ödeme sorunları</li>
</ul>

<h4>İade ve Değişim</h4>
<ul>
<li>İade talebi oluşturma</li>
<li>Değişim işlemleri</li>
<li>Garanti kapsamındaki işlemler</li>
<li>Arızalı ürün bildirimi</li>
</ul>

<h3>İletişim Kanallarımız</h3>
<p><strong>Telefon:</strong> 0850 XXX XX XX (Pazartesi-Cumartesi 09:00-18:00)<br>
<strong>E-posta:</strong> destek@magazamiz.com<br>
<strong>Canlı Destek:</strong> Web sitemiz üzerinden 7/24<br>
<strong>WhatsApp:</strong> 0532 XXX XX XX</p>

<p>Müşteri memnuniyeti bizim için önceliktir. Her zaman yanınızdayız!</p>',
                    'title'   => 'Müşteri Hizmetleri',
                ],

                'payment-policy' => [
                    'content' => '<h2>Ödeme Politikası</h2>
<p>Güvenli ve kolay ödeme seçenekleriyle alışverişinizi tamamlayabilirsiniz. Tüm ödeme işlemleriniz SSL sertifikası ile şifrelenerek korunmaktadır.</p>

<h3>Kabul Edilen Ödeme Yöntemleri</h3>

<h4>Kredi Kartı / Banka Kartı</h4>
<ul>
<li>Visa, MasterCard, American Express kartlarıyla ödeme</li>
<li>3D Secure güvenli ödeme altyapısı</li>
<li>Taksit imkanı (2, 3, 6, 9 ve 12 taksit seçenekleri)</li>
<li>Tek çekim ödemelerinde ek indirim fırsatları</li>
</ul>

<h4>Banka Havalesi / EFT</h4>
<ul>
<li>Türkiye\'nin önde gelen bankalarına havale/EFT imkanı</li>
<li>Havale sonrası sipariş onayı 24 saat içinde yapılır</li>
<li>Açıklama kısmına sipariş numaranızı yazmayı unutmayın</li>
</ul>

<h4>Kapıda Ödeme</h4>
<ul>
<li>Nakit veya kredi kartı ile kapıda ödeme seçeneği</li>
<li>Kapıda ödeme için ek hizmet bedeli uygulanabilir</li>
<li>Bazı ürün ve bölgelerde kapıda ödeme seçeneği sunulmayabilir</li>
</ul>

<h4>Dijital Cüzdanlar</h4>
<ul>
<li>Anında ödeme ve kolay kullanım</li>
<li>Kayıtlı kart bilgileriyle hızlı ödeme</li>
</ul>

<h3>Taksit Seçenekleri</h3>
<p>Kredi kartı ile yapılan ödemelerde aşağıdaki taksit seçeneklerinden faydalanabilirsiniz:</p>
<ul>
<li>2 Taksit - Tüm bankalar</li>
<li>3 Taksit - Tüm bankalar</li>
<li>6 Taksit - Anlaşmalı bankalar</li>
<li>9 Taksit - Anlaşmalı bankalar</li>
<li>12 Taksit - Anlaşmalı bankalar</li>
</ul>
<p><em>Not: Taksit seçenekleri bankanıza ve kart tipinize göre değişiklik gösterebilir.</em></p>

<h3>Güvenli Ödeme</h3>
<p>Ödeme bilgileriniz 256-bit SSL şifreleme ile korunmaktadır. Kart bilgileriniz sistemimizde saklanmaz ve üçüncü taraflarla paylaşılmaz. 3D Secure sistemi ile ekstra güvenlik sağlanmaktadır.</p>

<h3>Fatura Bilgileri</h3>
<p>Siparişlerinizin faturaları, ürünlerinizle birlikte gönderilir. E-fatura tercih eden müşterilerimize dijital fatura e-posta ile iletilir. Kurumsal fatura talepleri için sipariş sırasında şirket bilgilerinizi girmeniz yeterlidir.</p>',
                    'title'   => 'Ödeme Politikası',
                ],

                'privacy-policy' => [
                    'content' => '<h2>Gizlilik Politikası</h2>
<p>Bu gizlilik politikası, web sitemizi kullanırken kişisel verilerinizin nasıl toplandığını, kullanıldığını ve korunduğunu açıklamaktadır. 6698 sayılı Kişisel Verilerin Korunması Kanunu (KVKK) kapsamında haklarınız güvence altındadır.</p>

<h3>Toplanan Kişisel Veriler</h3>
<p>Hizmetlerimizi sunabilmek için aşağıdaki kişisel verileri topluyoruz:</p>
<ul>
<li><strong>Kimlik Bilgileri:</strong> Ad, soyad, T.C. kimlik numarası</li>
<li><strong>İletişim Bilgileri:</strong> E-posta adresi, telefon numarası, adres</li>
<li><strong>Finansal Bilgiler:</strong> Fatura bilgileri (kart bilgileri saklanmaz)</li>
<li><strong>İşlem Bilgileri:</strong> Sipariş geçmişi, ödeme kayıtları</li>
<li><strong>Teknik Bilgiler:</strong> IP adresi, tarayıcı bilgileri, çerezler</li>
</ul>

<h3>Verilerin Kullanım Amaçları</h3>
<p>Kişisel verileriniz aşağıdaki amaçlarla kullanılmaktadır:</p>
<ul>
<li>Siparişlerinizin işlenmesi ve teslimatı</li>
<li>Müşteri hizmetleri desteği sağlanması</li>
<li>Yasal yükümlülüklerin yerine getirilmesi</li>
<li>Hesap güvenliğinin sağlanması</li>
<li>Hizmet kalitesinin artırılması</li>
<li>Onay vermeniz halinde pazarlama iletişimleri</li>
</ul>

<h3>Verilerin Paylaşımı</h3>
<p>Kişisel verileriniz aşağıdaki durumlar dışında üçüncü taraflarla paylaşılmaz:</p>
<ul>
<li><strong>Kargo Şirketleri:</strong> Teslimat için gerekli bilgiler</li>
<li><strong>Ödeme Kuruluşları:</strong> Ödeme işlemlerinin gerçekleştirilmesi</li>
<li><strong>Yasal Merciler:</strong> Kanuni zorunluluklar halinde</li>
<li><strong>Hizmet Sağlayıcılar:</strong> Hizmet sunumu için gerekli iş ortakları (gizlilik sözleşmeleri kapsamında)</li>
</ul>

<h3>Veri Güvenliği</h3>
<p>Kişisel verilerinizin güvenliği için aşağıdaki önlemleri alıyoruz:</p>
<ul>
<li>256-bit SSL şifreleme ile veri iletimi</li>
<li>Güvenlik duvarları ve sızma testleri</li>
<li>Erişim kontrolleri ve yetkilendirme sistemleri</li>
<li>Düzenli güvenlik güncellemeleri</li>
<li>Personel gizlilik eğitimleri</li>
</ul>

<h3>Çerez Politikası</h3>
<p>Web sitemiz, deneyiminizi iyileştirmek için çerezler kullanmaktadır:</p>
<ul>
<li><strong>Zorunlu Çerezler:</strong> Sitenin çalışması için gerekli</li>
<li><strong>Analitik Çerezler:</strong> Site kullanımını analiz etmek için</li>
<li><strong>İşlevsel Çerezler:</strong> Tercihlerinizi hatırlamak için</li>
<li><strong>Pazarlama Çerezleri:</strong> Onayınız dahilinde reklam gösterimi</li>
</ul>
<p>Tarayıcı ayarlarınızdan çerez tercihlerinizi yönetebilirsiniz.</p>

<h3>KVKK Kapsamındaki Haklarınız</h3>
<p>6698 sayılı KVKK kapsamında aşağıdaki haklara sahipsiniz:</p>
<ul>
<li>Kişisel verilerinizin işlenip işlenmediğini öğrenme</li>
<li>Kişisel verileriniz hakkında bilgi talep etme</li>
<li>Verilerin işlenme amacını ve amaca uygun kullanılıp kullanılmadığını öğrenme</li>
<li>Verilerin aktarıldığı üçüncü kişileri bilme</li>
<li>Yanlış veya eksik verilerin düzeltilmesini isteme</li>
<li>Verilerin silinmesini veya yok edilmesini talep etme</li>
<li>İşlemlerin üçüncü kişilere bildirilmesini isteme</li>
<li>Verilerin analiz edilmesiyle aleyhinize bir sonuç çıkmasına itiraz etme</li>
<li>Kanuna aykırı işleme nedeniyle zararın giderilmesini talep etme</li>
</ul>

<h3>İletişim</h3>
<p>Gizlilik politikamız veya kişisel verileriniz hakkında sorularınız için:<br>
<strong>E-posta:</strong> kvkk@magazamiz.com<br>
<strong>Adres:</strong> Örnek Mahallesi, Örnek Caddesi No:123, Kadıköy/İstanbul</p>

<p><em>Bu politika en son [Tarih] tarihinde güncellenmiştir.</em></p>',
                    'title'   => 'Gizlilik Politikası',
                ],

                'refund-policy' => [
                    'content' => '<h2>İade ve Geri Ödeme Politikası</h2>
<p>Müşteri memnuniyeti bizim için önceliktir. Satın aldığınız ürünlerden memnun kalmamanız durumunda, aşağıdaki koşullar dahilinde iade ve geri ödeme işlemlerinizi gerçekleştirebilirsiniz.</p>

<h3>Geri Ödeme Koşulları</h3>
<p>Aşağıdaki durumlarda geri ödeme talebinde bulunabilirsiniz:</p>
<ul>
<li>Ürünün hasarlı veya arızalı olması</li>
<li>Yanlış ürün gönderilmesi</li>
<li>Ürünün tanımlanan özelliklerden farklı olması</li>
<li>Cayma hakkı kapsamında yapılan iadeler</li>
</ul>

<h3>Geri Ödeme Süreci</h3>
<ol>
<li>İade talebinizi oluşturun (hesabınız üzerinden veya müşteri hizmetleri ile)</li>
<li>Ürünü orijinal ambalajında ve tüm aksesuarlarıyla birlikte gönderin</li>
<li>Ürün tarafımıza ulaştıktan sonra kalite kontrol yapılır</li>
<li>Onay sonrası geri ödeme işlemi başlatılır</li>
</ol>

<h3>Geri Ödeme Yöntemleri ve Süreleri</h3>
<ul>
<li><strong>Kredi Kartı Ödemeleri:</strong> İade onayından sonra 5-10 iş günü içinde kartınıza iade edilir</li>
<li><strong>Banka Kartı Ödemeleri:</strong> İade onayından sonra 5-10 iş günü içinde hesabınıza aktarılır</li>
<li><strong>Havale/EFT Ödemeleri:</strong> İade onayından sonra 3-5 iş günü içinde belirttiğiniz IBAN\'a gönderilir</li>
<li><strong>Kapıda Ödeme:</strong> Belirttiğiniz IBAN\'a 3-5 iş günü içinde gönderilir</li>
</ul>
<p><em>Not: Geri ödeme süreleri bankanıza göre değişiklik gösterebilir.</em></p>

<h3>Kısmi Geri Ödeme</h3>
<p>Aşağıdaki durumlarda kısmi geri ödeme yapılabilir:</p>
<ul>
<li>Ürünün kullanım izleri taşıması</li>
<li>Orijinal ambalajın eksik veya hasarlı olması</li>
<li>Aksesuarların eksik olması</li>
<li>Ürün değerinin azalmış olması</li>
</ul>

<h3>Geri Ödeme Yapılamayacak Durumlar</h3>
<ul>
<li>Hijyen ürünleri (iç giyim, kozmetik vb.) açıldıktan sonra</li>
<li>Kişiye özel üretilmiş ürünler</li>
<li>Dijital içerikler (indirildikten sonra)</li>
<li>14 günlük cayma hakkı süresini aşmış iadeler</li>
<li>Hasar veya eksik parça içeren iadeler (kullanıcı kaynaklı)</li>
</ul>

<h3>İptal ve Geri Ödeme</h3>
<p>Siparişinizi kargoya verilmeden önce iptal ederseniz, ödemeniz tam olarak iade edilir. Kargoya verildikten sonraki iptaller, ürün tarafımıza ulaştıktan sonra işleme alınır.</p>

<h3>İletişim</h3>
<p>Geri ödeme süreciniz hakkında sorularınız için:<br>
<strong>E-posta:</strong> iade@magazamiz.com<br>
<strong>Telefon:</strong> 0850 XXX XX XX</p>',
                    'title'   => 'Geri Ödeme Politikası',
                ],

                'return-policy' => [
                    'content' => '<h2>İade ve Değişim Politikası</h2>
<p>Ürünlerimizden memnun kalmamanız durumunda, 6502 sayılı Tüketicinin Korunması Hakkında Kanun ve Mesafeli Sözleşmeler Yönetmeliği kapsamında iade ve değişim hakkınız bulunmaktadır.</p>

<h3>Cayma Hakkı</h3>
<p>Mesafeli sözleşmeler kapsamında, ürünü teslim aldığınız tarihten itibaren <strong>14 gün</strong> içinde herhangi bir gerekçe göstermeksizin cayma hakkınızı kullanabilirsiniz.</p>

<h3>İade Koşulları</h3>
<p>İade işlemi için ürünün:</p>
<ul>
<li>Kullanılmamış ve denenmemiş olması</li>
<li>Orijinal ambalajında ve etiketleri üzerinde olması</li>
<li>Tüm aksesuarları ve hediyelerle birlikte iade edilmesi</li>
<li>Fatura veya irsaliyenin iade paketine eklenmesi</li>
</ul>

<h3>İade Edilemeyecek Ürünler</h3>
<p>Aşağıdaki ürünler iade kapsamı dışındadır:</p>
<ul>
<li>Tek kullanımlık ürünler ve ambalajı açılmış hijyen ürünleri</li>
<li>Kişiye özel üretilen veya kişiselleştirilen ürünler</li>
<li>Çabuk bozulabilir veya son kullanma tarihi geçebilecek ürünler</li>
<li>İndirilebilir yazılımlar ve dijital içerikler</li>
<li>Gazete, dergi gibi süreli yayınlar</li>
<li>Ambalajı açılmış ses veya görüntü kayıtları</li>
</ul>

<h3>İade Süreci</h3>
<ol>
<li><strong>Talep Oluşturma:</strong> Hesabınızdan "Siparişlerim" bölümüne giderek iade talebi oluşturun veya müşteri hizmetlerimizi arayın.</li>
<li><strong>Onay:</strong> Talebiniz incelenerek size onay ve kargo bilgisi gönderilir.</li>
<li><strong>Paketleme:</strong> Ürünü orijinal ambalajında, fatura ile birlikte paketleyin.</li>
<li><strong>Kargo:</strong> Belirtilen kargo şirketi ile ürünü gönderin. İade kargo ücreti tarafımızca karşılanır.</li>
<li><strong>Kontrol:</strong> Ürün tarafımıza ulaştığında kalite kontrol yapılır.</li>
<li><strong>Sonuç:</strong> Onay sonrası iade veya değişim işlemi gerçekleştirilir.</li>
</ol>

<h3>Değişim İşlemleri</h3>
<p>Beden, renk veya model değişikliği için:</p>
<ul>
<li>Değişim talebi oluştururken yeni ürün bilgilerini belirtin</li>
<li>Stok durumuna göre değişim yapılır</li>
<li>Fiyat farkı varsa ödeme veya iade işlemi uygulanır</li>
</ul>

<h3>Hasarlı veya Arızalı Ürün</h3>
<p>Ürününüz hasarlı veya arızalı ulaştıysa:</p>
<ul>
<li>Kargo teslim anında tutanak tutturun</li>
<li>Ürünü açmadan fotoğraflayın</li>
<li>24 saat içinde müşteri hizmetlerimize bildirin</li>
<li>Ücretsiz değişim veya iade işlemi yapılır</li>
</ul>

<h3>İade Kargo Bilgileri</h3>
<p>Anlaşmalı kargo şirketlerimiz: Yurtiçi Kargo, Aras Kargo, MNG Kargo, PTT Kargo<br>
Cayma hakkı kapsamındaki iadelerde kargo ücreti tarafımızdan karşılanır.</p>

<h3>İletişim</h3>
<p>İade ve değişim işlemleriniz için:<br>
<strong>E-posta:</strong> iade@magazamiz.com<br>
<strong>Telefon:</strong> 0850 XXX XX XX<br>
<strong>Çalışma Saatleri:</strong> Pazartesi - Cumartesi, 09:00 - 18:00</p>',
                    'title'   => 'İade ve Değişim',
                ],

                'shipping-policy' => [
                    'content' => '<h2>Kargo ve Teslimat Politikası</h2>
<p>Siparişlerinizi en hızlı ve güvenli şekilde teslim etmek için güvenilir kargo şirketleriyle çalışıyoruz.</p>

<h3>Kargo Ücretleri</h3>
<ul>
<li><strong>Ücretsiz Kargo:</strong> 500 TL ve üzeri siparişlerde kargo ücretsizdir</li>
<li><strong>Standart Kargo:</strong> 500 TL altı siparişlerde sabit kargo ücreti uygulanır</li>
<li><strong>Ekspres Kargo:</strong> Ek ücret karşılığında aynı gün veya ertesi gün teslimat</li>
</ul>

<h3>Teslimat Süreleri</h3>
<ul>
<li><strong>İstanbul içi:</strong> 1-2 iş günü</li>
<li><strong>Büyükşehirler:</strong> 2-3 iş günü</li>
<li><strong>Diğer iller:</strong> 3-5 iş günü</li>
<li><strong>Kırsal bölgeler:</strong> 5-7 iş günü</li>
</ul>
<p><em>Not: Teslimat süreleri tahminidir ve kampanya dönemlerinde uzayabilir.</em></p>

<h3>Sipariş Takibi</h3>
<p>Siparişinizi takip etmek için:</p>
<ol>
<li>Hesabınıza giriş yapın ve "Siparişlerim" bölümüne gidin</li>
<li>Kargo takip numaranızla kargo şirketinin web sitesinden takip edin</li>
<li>SMS ve e-posta ile gönderilen bildirimlerimizi takip edin</li>
</ol>

<h3>Teslimat Bilgileri</h3>
<ul>
<li>Kargo teslimatları hafta içi 09:00-19:00, Cumartesi 09:00-14:00 arasında yapılır</li>
<li>Teslimat sırasında alıcının kimlik ibrazı gerekebilir</li>
<li>Adresinizde bulunamazsanız, kargo şirketi size ulaşmaya çalışacaktır</li>
<li>3 başarısız teslimat girişiminden sonra sipariş iade edilir</li>
</ul>

<h3>Kapıda Ödeme</h3>
<ul>
<li>Kapıda nakit veya kredi kartı ile ödeme yapabilirsiniz</li>
<li>Kapıda ödeme için ek hizmet bedeli alınabilir</li>
<li>Bazı bölgelerde kapıda ödeme seçeneği mevcut olmayabilir</li>
</ul>

<h3>Paketleme</h3>
<p>Ürünlerimiz özenle paketlenir:</p>
<ul>
<li>Kırılacak ürünler ekstra koruma ile sarılır</li>
<li>Gizlilik için paketlerde ürün bilgisi yazmaz</li>
<li>Çevre dostu ambalaj malzemeleri kullanılır</li>
</ul>

<h3>Anlaşmalı Kargo Şirketleri</h3>
<p>Yurtiçi Kargo, Aras Kargo, MNG Kargo, Sürat Kargo, PTT Kargo</p>

<h3>Önemli Notlar</h3>
<ul>
<li>Resmi tatillerde teslimat yapılmamaktadır</li>
<li>Olağanüstü hava koşullarında gecikmeler yaşanabilir</li>
<li>Yoğun dönemlerde (kampanyalar, bayramlar) teslimat süreleri uzayabilir</li>
<li>Adres değişikliği için sipariş kargoya verilmeden önce bizimle iletişime geçin</li>
</ul>

<h3>İletişim</h3>
<p>Kargo ve teslimat ile ilgili sorularınız için:<br>
<strong>E-posta:</strong> kargo@magazamiz.com<br>
<strong>Telefon:</strong> 0850 XXX XX XX</p>',
                    'title'   => 'Kargo ve Teslimat',
                ],

                'terms-conditions' => [
                    'content' => '<h2>Satış Sözleşmesi - Şartlar ve Koşullar</h2>
<p>Bu şartlar ve koşullar, web sitemiz üzerinden yapacağınız alışverişlerde uygulanacak kuralları belirlemektedir. Sitemizi kullanarak bu şartları kabul etmiş sayılırsınız.</p>

<h3>1. Taraflar</h3>
<p><strong>SATICI:</strong><br>
Ticaret Unvanı: [Şirket Adı]<br>
Adres: Örnek Mahallesi, Örnek Caddesi No:123, Kadıköy/İstanbul<br>
Telefon: 0850 XXX XX XX<br>
E-posta: info@magazamiz.com<br>
Mersis No: [Mersis Numarası]</p>

<p><strong>ALICI:</strong> Web sitesi üzerinden sipariş veren kişi</p>

<h3>2. Sözleşmenin Konusu</h3>
<p>İşbu sözleşme, ALICI\'nın SATICI\'ya ait web sitesinden elektronik ortamda siparişini verdiği ürünlerin satışı ve teslimi ile ilgili tarafların hak ve yükümlülüklerini düzenlemektedir.</p>

<h3>3. Ürün Bilgileri ve Fiyatlar</h3>
<ul>
<li>Ürünlerin temel özellikleri web sitesinde belirtilmiştir</li>
<li>Fiyatlar Türk Lirası (TRY) cinsinden ve KDV dahildir</li>
<li>SATICI, fiyatları önceden haber vermeksizin değiştirme hakkını saklı tutar</li>
<li>Fiyat değişiklikleri mevcut siparişleri etkilemez</li>
</ul>

<h3>4. Sipariş ve Ödeme</h3>
<ul>
<li>Sipariş, ALICI tarafından web sitesi üzerinden onaylandığında bağlayıcı hale gelir</li>
<li>Ödeme işlemi tamamlanmadan sipariş onaylanmaz</li>
<li>SATICI, stok durumuna göre siparişi iptal etme hakkını saklı tutar</li>
<li>İptal durumunda ödeme tam olarak iade edilir</li>
</ul>

<h3>5. Teslimat</h3>
<ul>
<li>Ürünler, ALICI\'nın belirttiği adrese kargo ile gönderilir</li>
<li>Teslimat süresi sipariş onayından itibaren başlar</li>
<li>Yasal teslimat süresi 30 gündür</li>
<li>Mücbir sebepler halinde süre uzayabilir</li>
</ul>

<h3>6. Cayma Hakkı</h3>
<ul>
<li>ALICI, ürünü teslim aldığı tarihten itibaren 14 gün içinde cayma hakkını kullanabilir</li>
<li>Cayma hakkı kullanımında ürün, orijinal durumunda ve ambalajında iade edilmelidir</li>
<li>İade kargo ücreti SATICI tarafından karşılanır</li>
<li>Geri ödeme, ürünün SATICI\'ya ulaşmasından itibaren 14 gün içinde yapılır</li>
</ul>

<h3>7. Cayma Hakkı İstisnaları</h3>
<p>Aşağıdaki ürünlerde cayma hakkı kullanılamaz:</p>
<ul>
<li>Fiyatı borsa veya finans piyasalarına bağlı ürünler</li>
<li>ALICI\'nın istekleri doğrultusunda üretilen ürünler</li>
<li>Çabuk bozulan ürünler</li>
<li>Ambalajı açılmış hijyen ürünleri</li>
<li>Dijital içerikler (indirme başladıktan sonra)</li>
</ul>

<h3>8. Garanti</h3>
<ul>
<li>Ürünler, üretici garantisi kapsamındadır</li>
<li>Garanti süreleri ürüne göre değişmektedir</li>
<li>Garanti kapsamı, garanti belgesinde belirtilen koşullar dahilindedir</li>
</ul>

<h3>9. Kişisel Verilerin Korunması</h3>
<p>ALICI\'nın kişisel verileri, Gizlilik Politikamız ve 6698 sayılı KVKK kapsamında korunmaktadır.</p>

<h3>10. Uyuşmazlık Çözümü</h3>
<p>İşbu sözleşmeden doğan uyuşmazlıklarda Tüketici Hakem Heyetleri ve Tüketici Mahkemeleri yetkilidir. Parasal sınırlar için güncel yasal düzenlemeler geçerlidir.</p>

<h3>11. Yürürlük</h3>
<p>Bu sözleşme, ALICI tarafından elektronik ortamda onaylandığı tarihte yürürlüğe girer.</p>

<p><em>Son güncelleme: [Tarih]</em></p>',
                    'title'   => 'Şartlar ve Koşullar',
                ],

                'terms-of-use' => [
                    'content' => '<h2>Kullanım Koşulları</h2>
<p>Web sitemizi kullanarak aşağıdaki kullanım koşullarını kabul etmiş sayılırsınız. Lütfen bu koşulları dikkatlice okuyunuz.</p>

<h3>1. Genel Hükümler</h3>
<ul>
<li>Bu web sitesi [Şirket Adı] tarafından işletilmektedir</li>
<li>Siteyi kullanarak işbu koşulları kabul etmiş sayılırsınız</li>
<li>Koşulları kabul etmiyorsanız siteyi kullanmayınız</li>
<li>Koşullar önceden haber verilmeksizin güncellenebilir</li>
</ul>

<h3>2. Üyelik ve Hesap Güvenliği</h3>
<ul>
<li>Üyelik için doğru ve güncel bilgiler verilmelidir</li>
<li>Hesap bilgilerinizin güvenliğinden siz sorumlusunuz</li>
<li>Şifrenizi kimseyle paylaşmayın</li>
<li>Yetkisiz hesap kullanımını derhal bildirin</li>
<li>18 yaşından küçükler veli/vasi onayı ile üye olabilir</li>
</ul>

<h3>3. Site Kullanımı</h3>
<p>Aşağıdaki davranışlar kesinlikle yasaktır:</p>
<ul>
<li>Yasa dışı amaçlarla kullanım</li>
<li>Site güvenliğini tehdit eden eylemler</li>
<li>Virüs veya zararlı kod yayma</li>
<li>Diğer kullanıcıları rahatsız etme</li>
<li>Sahte hesap oluşturma</li>
<li>Otomatik sistemlerle veri toplama (scraping)</li>
<li>Site altyapısına aşırı yük bindirme</li>
</ul>

<h3>4. Fikri Mülkiyet Hakları</h3>
<ul>
<li>Sitedeki tüm içerikler (metin, görsel, logo, tasarım) tarafımıza aittir</li>
<li>İçerikler izinsiz kopyalanamaz, çoğaltılamaz, dağıtılamaz</li>
<li>Ticari markalarımız izinsiz kullanılamaz</li>
<li>Ürün görselleri temsilidir, gerçek ürün farklılık gösterebilir</li>
</ul>

<h3>5. Ürün Bilgileri ve Fiyatlar</h3>
<ul>
<li>Ürün bilgileri mümkün olduğunca doğru tutulmaya çalışılır</li>
<li>Teknik hatalardan kaynaklanan yanlışlıklardan sorumlu değiliz</li>
<li>Fiyatlar önceden haber verilmeksizin değiştirilebilir</li>
<li>Fiyat hataları durumunda siparişler iptal edilebilir</li>
</ul>

<h3>6. Sorumluluk Sınırları</h3>
<ul>
<li>Site "olduğu gibi" sunulmaktadır</li>
<li>Kesintisiz veya hatasız hizmet garantisi verilmemektedir</li>
<li>Teknik bakım nedeniyle geçici erişim kesintileri olabilir</li>
<li>Üçüncü taraf sitelerine verilen linklerden sorumlu değiliz</li>
<li>Mücbir sebeplerden kaynaklanan aksamalardan sorumlu değiliz</li>
</ul>

<h3>7. Kullanıcı İçerikleri</h3>
<ul>
<li>Yorumlarınızda hakaret, iftira ve yasadışı içerik paylaşmayın</li>
<li>Paylaştığınız içeriklerden siz sorumlusunuz</li>
<li>Uygunsuz içerikleri kaldırma hakkımız saklıdır</li>
<li>Kullanıcı içeriklerini pazarlama amacıyla kullanabiliriz</li>
</ul>

<h3>8. Hesap Askıya Alma ve Sonlandırma</h3>
<p>Aşağıdaki durumlarda hesabınız askıya alınabilir veya kapatılabilir:</p>
<ul>
<li>Kullanım koşullarının ihlali</li>
<li>Dolandırıcılık veya kötüye kullanım şüphesi</li>
<li>Diğer kullanıcılara zarar verme</li>
<li>Yasal gerekliliklere uyumsuzluk</li>
</ul>

<h3>9. Değişiklikler</h3>
<p>Bu kullanım koşulları zaman zaman güncellenebilir. Önemli değişiklikler için bildirim yapılacaktır. Güncellemelerden sonra siteyi kullanmaya devam etmeniz, yeni koşulları kabul ettiğiniz anlamına gelir.</p>

<h3>10. Uygulanacak Hukuk</h3>
<p>Bu koşullar Türkiye Cumhuriyeti kanunlarına tabidir. Uyuşmazlıklarda İstanbul Mahkemeleri ve İcra Daireleri yetkilidir.</p>

<h3>11. İletişim</h3>
<p>Kullanım koşulları hakkında sorularınız için:<br>
<strong>E-posta:</strong> hukuk@magazamiz.com</p>

<p><em>Son güncelleme: [Tarih]</em></p>',
                    'title'   => 'Kullanım Koşulları',
                ],

                'whats-new' => [
                    'content' => '<h2>Yenilikler ve Güncellemeler</h2>
<p>Sizlere daha iyi hizmet verebilmek için sürekli kendimizi geliştiriyoruz. İşte son dönemde yaptığımız yenilikler ve güncellemeler:</p>

<h3>Yeni Özellikler</h3>

<h4>Geliştirilmiş Alışveriş Deneyimi</h4>
<ul>
<li>Daha hızlı sayfa yükleme süreleri</li>
<li>Geliştirilmiş ürün arama ve filtreleme</li>
<li>Akıllı ürün önerileri</li>
<li>Karşılaştırma özelliği ile ürünleri yan yana inceleyin</li>
</ul>

<h4>Mobil Uygulama</h4>
<ul>
<li>iOS ve Android için optimize edilmiş uygulama</li>
<li>Anlık bildirimlerle kampanyalardan haberdar olun</li>
<li>Tek tıkla ödeme kolaylığı</li>
<li>Barkod tarayıcı ile hızlı ürün bulma</li>
</ul>

<h4>Ödeme Seçenekleri</h4>
<ul>
<li>Yeni taksit seçenekleri eklendi</li>
<li>Dijital cüzdan entegrasyonları</li>
<li>Daha güvenli 3D Secure altyapısı</li>
</ul>

<h3>Yeni Kategoriler</h3>
<p>Ürün yelpazemizi genişletmeye devam ediyoruz:</p>
<ul>
<li>Ev ve yaşam kategorisi</li>
<li>Spor ve outdoor ürünleri</li>
<li>Organik ve doğal ürünler</li>
<li>Teknoloji aksesuarları</li>
</ul>

<h3>Kampanyalar ve Fırsatlar</h3>
<ul>
<li><strong>Haftalık indirimler:</strong> Her hafta farklı kategorilerde özel fiyatlar</li>
<li><strong>Sadakat programı:</strong> Alışverişlerinizde puan kazanın, indirim elde edin</li>
<li><strong>İlk sipariş indirimi:</strong> Yeni üyelerimize özel %10 indirim</li>
<li><strong>Arkadaşını getir:</strong> Arkadaşınızı davet edin, her ikiniz de kazanın</li>
</ul>

<h3>Geliştirilmiş Müşteri Hizmetleri</h3>
<ul>
<li>7/24 canlı destek hattı</li>
<li>WhatsApp üzerinden iletişim imkanı</li>
<li>Daha hızlı iade ve değişim süreçleri</li>
<li>Genişletilmiş SSS bölümü</li>
</ul>

<h3>Sürdürülebilirlik Çalışmalarımız</h3>
<ul>
<li>Çevre dostu ambalaj malzemeleri</li>
<li>Karbon ayak izini azaltma projeleri</li>
<li>Geri dönüşüm programları</li>
<li>Yerel üreticileri destekleme</li>
</ul>

<h3>Yakında Gelecek Özellikler</h3>
<ul>
<li>Sanal deneme odası (AR teknolojisi)</li>
<li>Sesli arama özelliği</li>
<li>Canlı alışveriş yayınları</li>
<li>Abonelik sistemi ile düzenli teslimat</li>
</ul>

<p>Gelişmelerimizi takip etmek için e-posta bültenimize abone olun ve sosyal medya hesaplarımızı takip edin!</p>',
                    'title'   => 'Yenilikler',
                ],
            ],
        ],

        'core' => [
            'channels' => [
                'name'             => 'Varsayılan',
                'meta-title'       => 'Demo Mağaza',
                'meta-keywords'    => 'Demo Mağaza Meta Anahtar Kelimeler',
                'meta-description' => 'Demo Mağaza Meta Açıklama',
            ],

            'currencies' => [
                'EUR' => 'Euro',
                'TRY' => 'Türk Lirası',
                'USD' => 'Amerikan Doları',
            ],

            'header-offer' => [
                'title'             => 'İlk siparişinizde %40\'a kadar indirim kazanın',
                'redirection-title' => 'ŞİMDİ ALIŞVERİŞ YAP',
            ],

            'locales'    => [
                'en' => 'İngilizce',
                'tr' => 'Türkçe',
            ],
        ],

        'customer' => [
            'customer-groups' => [
                'general'   => 'Genel',
                'guest'     => 'Misafir',
                'wholesale' => 'Toptan',
            ],
        ],

        'inventory' => [
            'inventory-sources' => [
                'name' => 'Varsayılan',
            ],
        ],

        'shop' => [
            'theme-customizations' => [
                'all-products' => [
                    'name' => 'Tüm Ürünler',

                    'options' => [
                        'title' => 'Tüm Ürünler',
                    ],
                ],

                'bold-collections' => [
                    'content' => [
                        'btn-title'   => 'Koleksiyonlara Göz At',
                        'description' => 'Yeni Cesur Koleksiyonlarımızı Tanıtıyoruz! Cesur tasarımlar ve canlı ifadelerle tarzınızı yükseltin. Gardırobunuzu yeniden tanımlayan çarpıcı desenler ve cesur renklere keşfedin. Olağanüstüye hazır olun!',
                        'title'       => 'Yeni Cesur Koleksiyonlarımıza Hazır Olun!',
                    ],

                    'name' => 'Cesur Koleksiyonlar',
                ],

                'categories-collections' => [
                    'name' => 'Kategori Koleksiyonları',
                ],

                'featured-collections' => [
                    'name' => 'Öne Çıkan Koleksiyonlar',

                    'options' => [
                        'title' => 'Öne Çıkan Ürünler',
                    ],
                ],

                'footer-links' => [
                    'name' => 'Footer Links',

                    'options' => [
                        'about-us'         => 'Hakkımızda',
                        'contact-us'       => 'Bize Ulaşın',
                        'customer-service' => 'Müşteri Hizmetleri',
                        'payment-policy'   => 'Ödeme Politikası',
                        'privacy-policy'   => 'Gizlilik Politikası',
                        'refund-policy'    => 'İade Politikası',
                        'return-policy'    => 'İade Politikası',
                        'shipping-policy'  => 'Kargo Politikası',
                        'terms-conditions' => 'Şartlar ve Koşullar',
                        'terms-of-use'     => 'Kullanım Koşulları',
                        'whats-new'        => 'Yenilikler',
                    ],
                ],

                'game-container' => [
                    'content' => [
                        'sub-title-1' => 'Koleksiyonlarımız',
                        'sub-title-2' => 'Koleksiyonlarımız',
                        'title'       => 'Yeni eklemelerimizle oyun!',
                    ],

                    'name' => 'Oyun Konteyneri',
                ],

                'image-carousel' => [
                    'name' => 'Resim Karuseli',

                    'sliders' => [
                        'title' => 'Yeni Koleksiyona Hazır Olun',
                    ],
                ],

                'new-products' => [
                    'name' => 'Yeni Ürünler',

                    'options' => [
                        'title' => 'Yeni Ürünler',
                    ],
                ],

                'offer-information' => [
                    'content' => [
                        'title' => 'İlk siparişinizde %40\'a kadar İNDİRİM alın HEMEN ALIŞVERİŞ YAPIN',
                    ],

                    'name' => 'Teklif Bilgisi',
                ],

                'services-content' => [
                    'description' => [
                        'emi-available-info'   => 'Tüm ana kredi kartlarında ücretsiz EMI mevcut',
                        'free-shipping-info'   => 'Tüm siparişlerde ücretsiz kargo keyfini çıkarın',
                        'product-replace-info' => 'Kolay ürün değiştirme mevcut!',
                        'time-support-info'    => 'Sohbet ve e-posta yoluyla adanmış 7/24 destek',
                    ],

                    'name' => 'Hizmet İçeriği',

                    'title' => [
                        'emi-available'   => 'EMI Mevcut',
                        'free-shipping'   => 'Ücretsiz Kargo',
                        'product-replace' => 'Ürün Değiştirme',
                        'time-support'    => '7/24 Destek',
                    ],
                ],

                'top-collections' => [
                    'content' => [
                        'sub-title-1' => 'Koleksiyonlarımız',
                        'sub-title-2' => 'Koleksiyonlarımız',
                        'sub-title-3' => 'Koleksiyonlarımız',
                        'sub-title-4' => 'Koleksiyonlarımız',
                        'sub-title-5' => 'Koleksiyonlarımız',
                        'sub-title-6' => 'Koleksiyonlarımız',
                        'title'       => 'Yeni eklemelerimizle oyun!',
                    ],

                    'name' => 'En İyi Koleksiyonlar',
                ],
            ],
        ],

        'tax' => [
            'categories' => [
                'basic-food'         => 'Temel Gıda (%1 KDV)',
                'basic-food-desc'    => 'Temel gıda maddeleri için %1 KDV oranı uygulanır.',
                'reduced-rate'       => 'İndirimli Oran (%10 KDV)',
                'reduced-rate-desc'  => 'İlaçlar ve temel ihtiyaç maddeleri için %10 KDV oranı uygulanır.',
                'standard-rate'      => 'Standart Oran (%20 KDV)',
                'standard-rate-desc' => 'Genel ürünler için standart %20 KDV oranı uygulanır.',
            ],
        ],

        'user' => [
            'roles' => [
                'description' => 'Bu rol kullanıcılara tüm erişimi sağlar',
                'name'        => 'Yönetici',
            ],

            'users' => [
                'name' => 'Default KULLANICI',
            ],
        ],

        'sample-categories' => [
            'category-translation' => [
                '2' => [
                    'description'      => 'Erkek Kategori Açıklaması',
                    'meta-description' => 'Erkek Kategori Meta Açıklaması',
                    'meta-keywords'    => 'Erkek Kategori Meta Anahtar Kelimeleri',
                    'meta-title'       => 'Erkek Kategori Meta Başlığı',
                    'name'             => 'Erkekler',
                    'slug'             => 'erkekler',
                ],

                '3' => [
                    'description'      => 'Kış Giyim Kategori Açıklaması',
                    'meta-description' => 'Kış Giyim Kategori Meta Açıklaması',
                    'meta-keywords'    => 'Kış Giyim Kategori Meta Anahtar Kelimeleri',
                    'meta-title'       => 'Kış Giyim Kategori Meta Başlığı',
                    'name'             => 'Kış giysisi',
                    'slug'             => 'kış giysisi',
                ],
            ],
        ],

        'sample-products' => [
            'product-flat' => [
                '1' => [
                    'description'       => 'Arctic Cozy Örme Unisex Bere, soğuk aylarda sıcak, rahat ve şık kalmanız için ideal bir çözümdür. Akrilik örgü malzemeden üretilen bu bere, sıcak ve sıkı bir uyum sağlamak için tasarlanmıştır. Klasik tasarımı sayesinde hem erkekler hem de kadınlar için uygun olan bu bere, çeşitli stillere uyum sağlayan çok yönlü bir aksesuardır. Şehirde rahat bir gün geçirirken veya doğayla iç içe olurken, bu bere, kıyafetinize biraz konfor ve sıcaklık katıyor. Yumuşak ve nefes alabilen malzeme, tarzınızdan ödün vermeden sıcak kalmanızı sağlar. Arctic Cozy Örme Unisex Bere sadece bir aksesuar değil, kış modasının bir ifadesidir. Basitliği, farklı kıyafetlerle kolayca eşleştirilebilmesini sağlar ve kış gardırobunuzun vazgeçilmez bir parçası haline gelir. Hediye olarak veya kendinizi şımartmak için düşünülen bu bere, her kış kombinine düşünülen bir ek olarak düşünülebilir. Sıcaklık ile zamansız bir moda anlayışını mükemmel bir şekilde birleştiren bu klasik aksesuarla kış gardırobunuzu yükseltin.',
                    'meta-description'  => 'meta açıklama',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Başlık',
                    'name'              => 'Arctic Cozy Örme Unisex Bere',
                    'short-description' => 'Arctic Cozy Örme Bere ile soğuk günlerde şıklığı kucaklayın. Akrilikten yapılan bu klasik bere, sıcaklık ve çok yönlülük sunar. Hem erkekler hem de kadınlar için uygun olan bu bere, rahat veya açık hava giyimi için ideal bir aksesuardır. Kış gardırobunuzu yükseltin veya özel birine hediye olarak verin bu temel bere şapka ile.',
                ],

                '2' => [
                    'description'       => 'Arctic Bliss Kış Şalı, sadece soğuk hava aksesuarı değil, kış sezonu için sıcaklık, konfor ve stil ifadesidir. Akrilik ve yünün lüks bir karışımından özenle üretilen bu şal, en soğuk sıcaklıklarda bile sizi sıcak ve rahat tutmak için tasarlanmıştır. Yumuşak ve peluş dokusu, sadece soğuğa karşı yalıtım sağlamakla kalmaz, aynı zamanda kış gardırobunuza bir dokunuş lüks katar. Arctic Bliss Kış Şalı\'nın tasarımı hem şık hem de çok yönlüdür, bu da onu çeşitli kış kıyafetlerine mükemmel bir ek yapar. Özel bir etkinlik için giyinirken veya günlük görünümünüze şık bir katman eklerken, bu şal tarzınızı mükemmel bir şekilde tamamlar. Şalın ekstra uzunluğu, özelleştirilebilir stil seçenekleri sunar. Sıcaklık için sarın, gevşek bir şekilde sallayın veya farklı düğümlerle deney yapın ve benzersiz stilinizi ifade edin. Bu çok yönlülük, kış sezonu için olmazsa olmaz bir aksesuardır. Mükemmel bir hediye mi arıyorsunuz? Arctic Bliss Kış Şalı ideal bir seçimdir. Sevdiklerinizi şaşırtıyor veya kendinizi şımartıyorsanız, bu şal, kış ayları boyunca değerli bir hediye olacaktır. Arctic Bliss Kış Şalı ile kışı kucaklayın, sıcaklık stil ile mükemmel bir uyum içinde buluşur. Kış gardırobunuzu bu temel aksesuarla yükseltin, sadece sizi sıcak tutmakla kalmaz, aynı zamanda soğuk hava kıyafetinize biraz sofistike bir dokunuş katar.',
                    'meta-description'  => 'meta açıklama',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Başlık',
                    'name'              => 'Arctic Bliss Şık Kış Şalı',
                    'short-description' => 'Arctic Bliss Kış Şalı ile sıcaklık ve stilin kucaklaşmasını deneyimleyin. Akrilik ve yünden yapılan bu rahat şal, en soğuk günlerde sizi sıcak tutmak için tasarlanmıştır. Şık ve çok yönlü tasarımı, ekstra uzunluğuyla özelleştirilebilir stil seçenekleri sunar. Kış gardırobunuzu yükseltin veya özel birine hediye olarak verin bu temel kış aksesuarı ile.',
                ],

                '3' => [
                    'description'       => 'Arctic Dokunmatik Kış Eldivenleri ile sıcaklık, stil ve bağlantı, kış deneyiminizi artırmak için buluşuyor. Yüksek kaliteli akrilikten üretilen bu eldivenler, olağanüstü sıcaklık ve dayanıklılık sağlamak için tasarlanmıştır. Dokunmatik uyumlu parmak uçları sayesinde ellerinizi soğuğa maruz bırakmadan bağlantıda kalabilirsiniz. Aramaları yanıtlayın, mesaj gönderin ve cihazlarınızı kolayca kullanın, tüm bunları ellerinizi sıcak tutarken yapın. Yalıtımlı astar ekstra bir rahatlık katmanı ekler ve bu eldivenleri kış soğuğuyla yüzleşmek için tercih edeceğiniz seçenek haline getirir. İşe gidip gelirken, işleri hallederken veya açık hava etkinliklerinin tadını çıkarırken, bu eldivenler ihtiyacınız olan sıcaklık ve korumayı sağlar. Elastik manşetler, güvenli bir uyum sağlayarak soğuk hava akımlarını önler ve günlük aktiviteleriniz sırasında eldivenleri yerinde tutar. Şık tasarım, kış kıyafetinize bir dokunuş katarken, bu eldivenleri işlevsel olduğu kadar modaya uygun hale getirir. Hediye olarak veya kendinizi şımartmak için ideal olan Arctic Dokunmatik Kış Eldivenleri, modern birey için olmazsa olmaz bir aksesuardır. Eldivenlerinizi çıkarmadan cihazlarınızı kullanma zahmetinden kurtulun ve sıcaklık, stil ve bağlantının sorunsuz bir şekilde birleştiği bu eldivenlerle kalın. Arctic Dokunmatik Kış Eldivenleri ile bağlantıda kalın, sıcak kalın ve şık kalın - kış mevsimini özgüvenle yenmek için güvenilir bir arkadaşınız.',
                    'meta-description'  => 'meta açıklama',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Başlık',
                    'name'              => 'Arctic Dokunmatik Kış Eldivenleri',
                    'short-description' => 'Arctic Dokunmatik Kış Eldivenleri ile bağlantıda kalın ve sıcak kalın. Bu eldivenler sadece sıcaklık ve dayanıklılık için yüksek kaliteli akrilikten üretilmiyor, aynı zamanda dokunmatik uyumlu bir tasarıma sahip. Yalıtımlı astar, güvenli bir uyum için elastik manşetler ve şık bir görünüm ile bu eldivenler, soğuk koşullarda günlük giyim için mükemmel bir seçenektir.',
                ],

                '4' => [
                    'description'       => 'Arctic Sıcaklık Yün Karışımı Çorapları ile daha sıcak ve rahat ayaklarınızın vazgeçilmez arkadaşı olun. Merino yünü, akrilik, naylon ve spandex\'in birinci sınıf bir karışımından üretilen bu çoraplar, eşsiz sıcaklık ve konfor sağlamak için tasarlanmıştır. Yün karışımı, ayaklarınızın en soğuk sıcaklıklarda bile sıcak kalmasını sağlar, bu da bu çorapları kış maceraları için mükemmel bir seçenek veya sadece evde rahatlıkla kalmanızı sağlar. Çorapların yumuşak ve rahat dokusu, cildinizle lüks bir his sunar. Bu yün karışımı çoraplarla soğuk ayaklara veda edin ve sunulan yün karışımının sunduğu lüks sıcaklığı kucaklayın. Dayanıklılık için tasarlanan çoraplar, takviyeli topuk ve burun ile yüksek aşınma bölgelerine ekstra dayanıklılık sağlar. Bu, çoraplarınızın zamanın testini geçmesini ve uzun süreli konfor ve rahatlık sağlamasını sağlar. Malzemenin nefes alabilir yapısı aşırı ısınmayı önler, böylece ayaklarınız gün boyunca rahat ve kuru kalır. Kış yürüyüşü için dışarı çıkıyor veya içeride dinleniyorsanız, bu çoraplar sıcaklık ve nefes alabilirlik arasında mükemmel bir denge sunar. Çeşitli durumlar için uygun ve şık olan bu yün karışımı çorapları, favori botlarınızla şık bir kış görünümü için eşleştirin veya evde rahatlık için giyin. Kış gardırobunuzu yükseltin ve konforu önceliklendirin Arctic Sıcaklık Yün Karışımı Çorapları ile. Ayaklarınızı hak ettikleri lüksle şımartın ve tüm mevsim boyunca süren bir rahatlık dünyasına adım atın.',
                    'meta-description'  => 'meta açıklama',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Başlık',
                    'name'              => 'Arctic Sıcaklık Yün Karışımı Çorapları',
                    'short-description' => 'Arctic Sıcaklık Yün Karışımı Çoraplarımızın eşsiz sıcaklık ve konforunu deneyimleyin. Merino yünü, akrilik, naylon ve spandex\'in bir karışımından üretilen bu çoraplar, soğuk havalarda en üst düzeyde rahatlık sunar. Dayanıklılık için takviyeli topuk ve burun ile çok yönlü ve şık olan bu çoraplar, çeşitli durumlar için mükemmeldir.',
                ],

                '5' => [
                    'description'       => 'Arctic Frost Kış Aksesuarları Paketi ile soğuk kış günlerinde sıcak, şık ve bağlantılı kalmanın çözümünü sunuyoruz. Bu özenle seçilmiş set, dört temel kış aksesuarını bir araya getirerek uyumlu bir bütün oluşturur. Akrilik ve yünden dokunan lüks şal, sadece bir katman sıcaklık katmakla kalmaz, aynı zamanda kış gardırobunuza bir dokunuş elegans katar. Özenle tasarlanmış yumuşak örme bere, sizi sıcak tutmayı vaat ederken görünümünüze moda bir hava katar. Ama burada bitmiyor - setimiz ayrıca dokunmatik uyumlu eldivenler içeriyor. Cihazlarınızı kolayca kullanırken sıcaklıktan ödün vermeden bağlantıda kalın. Telefonunuzda çağrıları yanıtlarken, mesajlar gönderirken veya kış anılarınızı yakalarken, bu eldivenler stilinizden ödün vermeden kolaylık sağlar. Çorapların yumuşak ve rahat dokusu cildinizde lüks bir his sunar. Yün karışımı çorapların sağladığı peluş sıcaklık ile soğuk ayaklara veda edin. Arctic Frost Kış Aksesuarları Paketi sadece işlevsellikle ilgili değildir; kış modasının bir ifadesidir. Her parça sadece soğuktan korunmanızı sağlamakla kalmaz, aynı zamanda buzlu mevsimde stilinizi yükseltmek için tasarlanmıştır. Bu paket için seçilen malzemeler dayanıklılık ve konforu önceliklendirir, böylece kış cennetinin tadını stil sahibi bir şekilde çıkarabilirsiniz. Kendinizi şımartmak veya mükemmel bir hediye arayışında olun, Arctic Frost Kış Aksesuarları Paketi çok yönlü bir seçenektir. Tatil sezonunda özel birini mutlu et veya kendi kış gardırobunu bu şık ve işlevsel setle yükselt. Mükemmel aksesuarlara sahip olduğunuzdan emin olarak dondurucu soğuğa güvenle kucak açın.',
                    'meta-description'  => 'meta açıklama',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Başlık',
                    'name'              => 'Arctic Frost Kış Aksesuarları',
                    'short-description' => 'Arctic Frost Kış Aksesuarları Paketi ile kışın soğuğunu kucaklayın. Bu özenle seçilmiş set, lüks bir şal, rahat bir bere, dokunmatik uyumlu eldivenler ve yün karışımı çoraplardan oluşur. Şık ve işlevsel olan bu set, dayanıklılık ve konfor sağlayan yüksek kaliteli malzemelerden üretilmiştir. Kış gardırobunuzu yükseltin veya mükemmel bir hediye seçeneğiyle özel birini mutlu edin.',
                ],

                '6' => [
                    'description'       => 'Arctic Frost Kış Aksesuarları Paketi ile soğuk kış günlerinde sıcak, şık ve bağlantılı kalmanın çözümünü sunuyoruz. Bu özenle seçilmiş set, dört temel kış aksesuarını bir araya getirerek uyumlu bir bütün oluşturur. Akrilik ve yünden dokunan lüks şal, sadece bir katman sıcaklık katmakla kalmaz, aynı zamanda kış gardırobunuza bir dokunuş elegans katar. Özenle tasarlanmış yumuşak örme bere, sizi sıcak tutmayı vaat ederken görünümünüze moda bir hava katar. Ama burada bitmiyor - setimiz ayrıca dokunmatik uyumlu eldivenler içeriyor. Cihazlarınızı kolayca kullanırken sıcaklıktan ödün vermeden bağlantıda kalın. Telefonunuzda çağrıları yanıtlarken, mesajlar gönderirken veya kış anılarınızı yakalarken, bu eldivenler stilinizden ödün vermeden kolaylık sağlar. Çorapların yumuşak ve rahat dokusu cildinizde lüks bir his sunar. Yün karışımı çorapların sağladığı peluş sıcaklık ile soğuk ayaklara veda edin. Arctic Frost Kış Aksesuarları Paketi sadece işlevsellikle ilgili değildir; kış modasının bir ifadesidir. Her parça sadece soğuktan korunmanızı sağlamakla kalmaz, aynı zamanda buzlu mevsimde stilinizi yükseltmek için tasarlanmıştır. Bu paket için seçilen malzemeler dayanıklılık ve konforu önceliklendirir, böylece kış cennetinin tadını stil sahibi bir şekilde çıkarabilirsiniz. Kendinizi şımartmak veya mükemmel bir hediye arayışında olun, Arctic Frost Kış Aksesuarları Paketi çok yönlü bir seçenektir. Tatil sezonunda özel birini mutlu et veya kendi kış gardırobunu bu şık ve işlevsel setle yükselt. Mükemmel aksesuarlara sahip olduğunuzdan emin olarak dondurucu soğuğa güvenle kucak açın.',
                    'meta-description'  => 'meta açıklama',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Başlık',
                    'name'              => 'Arctic Frost Kış Aksesuarları Paketi',
                    'short-description' => 'Arctic Frost Kış Aksesuarları Paketi ile kışın soğuğunu kucaklayın. Bu özenle seçilmiş set, lüks bir şal, rahat bir bere, dokunmatik uyumlu eldivenler ve yün karışımı çoraplardan oluşur. Şık ve işlevsel olan bu set, dayanıklılık ve konfor sağlayan yüksek kaliteli malzemelerden üretilmiştir. Kış gardırobunuzu yükseltin veya mükemmel bir hediye seçeneğiyle özel birini mutlu edin.',
                ],

                '7' => [
                    'description'       => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu\'nu tanıtıyoruz, daha soğuk mevsimlerde sıcak ve modaya uygun kalmanız için ideal çözüm. Bu mont, dayanıklılık ve sıcaklık göz önünde bulundurularak tasarlanmış olup güvenilir bir arkadaşınız olacak. Kapüşonlu tasarım sadece bir stil dokunuşu eklemekle kalmaz, aynı zamanda ekstra sıcaklık sağlayarak soğuk rüzgarlardan ve hava koşullarından korur. Tam kollu tasarım, omuzdan bileğe kadar tam kapsama sağlayarak sıcak kalmanızı sağlar. İçe yerleştirilebilir cepleriyle bu puf mont, eşyalarınızı taşımak veya ellerinizi sıcak tutmak için kolaylık sağlar. Yalıtımlı sentetik dolgu, soğuk günler ve gecelerle mücadele etmek için geliştirilmiş sıcaklık sunar. Dayanıklı polyester dış yüzey ve astardan yapılan bu mont, dayanıklı ve hava koşullarına dayanıklıdır. 5 çekici renkte mevcut olan bu montu stilinize ve tercihinize uygun olanı seçebilirsiniz. Çok yönlü ve işlevsel olan OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu, işe gitmek, rahat bir gezintiye çıkmak veya açık hava etkinliğine katılmak için uygundur. OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu ile stil, konfor ve işlevselliğin mükemmel bir karışımını deneyimleyin. Kış gardırobunuzu yükseltin ve dışarıyı kucaklarken sıcacık kalın. Soğuğa tarzla meydan okuyun ve bu temel parça ile bir stil açıklaması yapın.',
                    'meta-description'  => 'meta açıklama',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Başlık',
                    'name'              => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu',
                    'short-description' => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu ile sıcak ve şık kalın. Bu mont, sıcaklık sağlamak ve ekstra kolaylık için içe yerleştirilebilir ceplere sahip olacak şekilde tasarlanmıştır. Yalıtımlı malzeme, soğuk havalarda sıcak kalmanızı sağlar. 5 çekici renkte mevcut olup çeşitli durumlar için çok yönlü bir seçenektir.',
                ],

                '8' => [
                    'description'       => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu ile sıcak ve şık kalın. Bu mont, sıcaklık sağlamak ve ekstra kolaylık için içe yerleştirilebilir ceplere sahip olacak şekilde tasarlanmıştır. Yalıtımlı malzeme, soğuk havalarda sıcak kalmanızı sağlar. 5 çekici renkte mevcut olup çeşitli durumlar için çok yönlü bir seçenektir.',
                    'meta-description'  => 'meta açıklama',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Başlık',
                    'name'              => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu-Mavi-Sarı-M',
                    'short-description' => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu ile sıcak ve şık kalın. Bu mont, sıcaklık sağlamak ve ekstra kolaylık için içe yerleştirilebilir ceplere sahip olacak şekilde tasarlanmıştır. Yalıtımlı malzeme, soğuk havalarda sıcak kalmanızı sağlar. 5 çekici renkte mevcut olup çeşitli durumlar için çok yönlü bir seçenektir.',
                ],

                '9' => [
                    'description'       => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu ile sıcak ve şık kalın. Bu mont, sıcaklık sağlamak ve ekstra kolaylık için içe yerleştirilebilir ceplere sahip olacak şekilde tasarlanmıştır. Yalıtımlı malzeme, soğuk havalarda sıcak kalmanızı sağlar. 5 çekici renkte mevcut olup çeşitli durumlar için çok yönlü bir seçenektir.',
                    'meta-description'  => 'meta açıklama',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Başlık',
                    'name'              => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu-Mavi-Sarı-L',
                    'short-description' => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu ile sıcak ve şık kalın. Bu mont, sıcaklık sağlamak ve ekstra kolaylık için içe yerleştirilebilir ceplere sahip olacak şekilde tasarlanmıştır. Yalıtımlı malzeme, soğuk havalarda sıcak kalmanızı sağlar. 5 çekici renkte mevcut olup çeşitli durumlar için çok yönlü bir seçenektir.',
                ],

                '10' => [
                    'description'       => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu ile sıcak ve şık kalın. Bu mont, sıcaklık sağlamak ve ekstra kolaylık için içe yerleştirilebilir ceplere sahip olacak şekilde tasarlanmıştır. Yalıtımlı malzeme, soğuk havalarda sıcak kalmanızı sağlar. 5 çekici renkte mevcut olup çeşitli durumlar için çok yönlü bir seçenektir.',
                    'meta-description'  => 'meta açıklama',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Başlık',
                    'name'              => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu-Mavi-Yeşil-M',
                    'short-description' => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu ile sıcak ve şık kalın. Bu mont, sıcaklık sağlamak ve ekstra kolaylık için içe yerleştirilebilir ceplere sahip olacak şekilde tasarlanmıştır. Yalıtımlı malzeme, soğuk havalarda sıcak kalmanızı sağlar. 5 çekici renkte mevcut olup çeşitli durumlar için çok yönlü bir seçenektir.',
                ],

                '11' => [
                    'description'       => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu ile soğuk mevsimlerde sıcak ve şık kalmanın çözümünü keşfedin. Bu mont, dayanıklılık ve sıcaklık göz önünde bulundurularak tasarlanmış olup güvenilir bir arkadaşınız olacak. Kapüşonlu tasarım sadece bir stil dokunuşu eklemekle kalmaz, aynı zamanda soğuk rüzgarlardan ve hava koşullarından korunmanızı sağlar. Tam kollu tasarım tam kapsama sağlar, böylece omuzdan bileğe kadar rahat kalmanızı sağlar. İçe yerleştirilebilir ceplerle donatılmış olan bu puf mont, eşyalarınızı taşımak veya ellerinizi sıcak tutmak için kolaylık sağlar. Yalıtımlı sentetik dolgu, soğuk günler ve gecelerle mücadele etmek için artırılmış sıcaklık sunar. Dayanıklı polyester dış kabuk ve astardan yapılan bu mont, uzun ömürlü ve hava koşullarına dayanıklıdır. 5 çekici renkte mevcut olup, tarzınıza ve tercihinize uygun olanı seçebilirsiniz. Çok yönlü ve işlevsel olan OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu, işe giderken, rahat bir geziye çıkarken veya açık havada bir etkinliğe katılırken çeşitli durumlar için uygundur. Tarz, konfor ve işlevselliğin mükemmel bir karışımını OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu ile deneyimleyin. Kış gardırobunuzu yükseltin ve dışarıyı kucaklarken sıcacık kalın. Soğuğa tarzla meydan okuyun ve bu temel parça ile bir açıklama yapın.',
                    'meta-description'  => 'meta açıklama',
                    'meta-keywords'     => 'meta1, meta2, meta3',
                    'meta-title'        => 'Meta Başlık',
                    'name'              => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu-Mavi-Yeşil-L',
                    'short-description' => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu ile sıcak ve şık kalın. Bu mont, sıcaklık sağlamak ve ekstra kolaylık için içe yerleştirilebilir ceplere sahip olacak şekilde tasarlanmıştır. Yalıtımlı malzeme, soğuk havalarda sıcak kalmanızı sağlar. 5 çekici renkte mevcut olup çeşitli durumlar için çok yönlü bir seçenektir.',
                ],
            ],

            'product-attribute-values' => [
                '1' => [
                    'description'      => 'Arctic Cozy Örme Unisex Bere, soğuk aylarda sıcak, rahat ve şık kalmanız için ideal bir çözümdür. Akrilik örgüden yapılan bu bere, sıcak ve sıkı bir uyum sağlamak için tasarlanmıştır. Klasik tasarımı, hem erkekler hem de kadınlar için uygun olan çeşitli stilleri tamamlayan çok yönlü bir aksesuar sunar. Şehirde rahat bir gün geçirirken veya doğayla iç içe olurken, bu bere, kıyafetinize biraz rahatlık ve sıcaklık katmanın bir yoludur. Yumuşak ve nefes alabilen malzeme, tarzınızdan ödün vermeden sıcak kalmanızı sağlar. Arctic Cozy Örme Unisex Bere sadece bir aksesuar değil, kış modasının bir ifadesidir. Basitliği, farklı kıyafetlerle kolayca eşleştirilebilir olmasını sağlar ve kış gardırobunuzun vazgeçilmez bir parçası haline gelir. Hediye olarak veya kendinizi şımartmak için ideal olan bu bere, kış kombinlerine düşünce dolu bir eklemektir. Fonksiyonelliğin ötesine geçen, sıcaklık ve stilin birleştiği çok yönlü bir aksesuardır. Arctic Cozy Örme Unisex Bere ile kışın ruhunu kucaklayın. Rahat bir gün geçirirken veya zorlu hava koşullarıyla karşılaşırken, bu bere sizi rahatlık ve stil için bir arkadaşınız olsun. Kış gardırobunuzu, sıcaklık ile zamansız bir moda anlayışını mükemmel bir şekilde birleştiren bu klasik aksesuarla yükseltin.',
                    'meta-description' => 'meta açıklama',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Başlık',
                    'name'             => 'Arctic Cozy Örme Unisex Bere',
                    'sort-description' => 'Arctic Cozy Örme Bere ile şık bir şekilde soğuk günlerin tadını çıkarın. Akrilikten yapılan bu klasik bere, sıcaklık ve çok yönlülük sunar. Hem erkekler hem de kadınlar için uygun olan bu bere, rahat veya açık hava giyimi için ideal bir aksesuardır. Kış gardırobunuzu yükseltin veya birisini mutlu etmek için bu temel bere şapkasıyla hediye verin.',
                ],

                '2' => [
                    'description'      => 'Arctic Bliss Kış Şalı, sadece soğuk hava aksesuarı değil, kış mevsimi için sıcaklık, konfor ve stilin bir ifadesidir. Akrilik ve yünün lüks bir karışımından özenle yapılan bu şal, en soğuk sıcaklıklarda bile sizi sıcak ve rahat tutmak için tasarlanmıştır. Yumuşak ve peluş dokusu, sadece soğuğa karşı yalıtım sağlamakla kalmaz, aynı zamanda kış gardırobunuza biraz lüks katmaktadır. Arctic Bliss Kış Şalı\'nın tasarımı hem şık hem de çok yönlüdür, bu da onu çeşitli kış kıyafetlerine mükemmel bir ek yapar. Özel bir durum için giyinirken veya günlük görünümünüze şık bir katman eklerken, bu şal tarzınızı mükemmel bir şekilde tamamlar. Şalın ekstra uzunluğu, özelleştirilebilir stil seçenekleri sunar. Sıcaklık için sarın, rahat bir görünüm için gevşek bir şekilde sarkıtın veya farklı düğümlerle deney yaparak benzersiz stilinizi ifade edin. Bu çok yönlülük, kış mevsimi için bir zorunlu aksesuar yapar. Mükemmel bir hediye mi arıyorsunuz? Arctic Bliss Kış Şalı ideal bir seçimdir. Sevdiklerinizi şaşırtıyor veya kendinizi şımartıyorsanız, bu şal, kış ayları boyunca değerli bir şekilde saklanacak zamansız ve pratik bir hediye olacaktır. Arctic Bliss Kış Şalı ile kışa, sıcaklık stil ile mükemmel bir uyum içinde kucak açın. Sizi sıcak tutmanın yanı sıra soğuk hava kıyafetinize biraz sofistike bir dokunuş ekleyen bu temel aksesuarla kış gardırobunuzu yükseltin.',
                    'meta-description' => 'meta açıklama',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Başlık',
                    'name'             => 'Arctic Bliss Şık Kış Şalı',
                    'sort-description' => 'Arctic Bliss Kış Şalı ile sıcaklık ve stilin kucaklaşmasını deneyimleyin. Akrilik ve yünden yapılan bu rahat şal, en soğuk günlerde sizi sıcak tutmak için tasarlanmıştır. Şık ve çok yönlü tasarımı, ekstra uzunluğuyla birlikte özelleştirilebilir stil seçenekleri sunar. Kış gardırobunuzu yükseltin veya birisini mutlu etmek için bu temel kış aksesuarıyla sevindirin.',
                ],

                '3' => [
                    'description'      => 'Arctic Dokunmatik Ekran Kış Eldivenleri, sıcaklık, stil ve bağlantının bir araya geldiği kış deneyiminizi geliştirmek için tasarlanmıştır. Yüksek kaliteli akrilikten yapılan bu eldivenler, olağanüstü sıcaklık ve dayanıklılık sağlamak için tasarlanmıştır. Dokunmatik ekran uyumlu parmak uçları, ellerinizi soğuğa maruz bırakmadan bağlantıda kalmanızı sağlar. Aramaları yanıtlayın, mesajlar gönderin ve cihazlarınızı kolayca gezinin, ellerinizi sıcak tutarken hepsini yapın. Yalıtımlı astar ekstra bir sıcaklık katmanı ekler, bu da bu eldivenleri günlük aktiviteleriniz sırasında ihtiyaç duyduğunuz sıcaklık ve korumayı sağlar. Elastik manşetler, soğuk hava akımlarını önleyerek eldivenleri günlük aktiviteleriniz sırasında yerinde tutar. Şık tasarım, kış kombininize biraz tarz ekler ve işlevsel olduğu kadar moda da olan bu eldivenler, mükemmel bir aksesuardır. Hediye olarak veya kendinizi şımartmak için Arctic Dokunmatik Ekran Kış Eldivenleri kesinlikle sahip olmanız gereken bir aksesuardır. Eldivenleri çıkarmadan cihazlarınızı kullanma zahmetinden kurtulun ve sıcaklık, stil ve bağlantının sorunsuz bir şekilde birleştiği bu eldivenlerle bağlantıda kalın. Arctic Dokunmatik Ekran Kış Eldivenleri ile bağlantıda kalın, sıcak kalın ve şık kalın - kış mevsimini özgüvenle yenmek için güvenilir bir arkadaşınız.',
                    'meta-description' => 'meta açıklama',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Başlık',
                    'name'             => 'Arctic Dokunmatik Ekran Kış Eldivenleri',
                    'sort-description' => 'Arctic Dokunmatik Ekran Kış Eldivenleri ile bağlantıda kalın ve sıcak kalın. Bu eldivenler sadece sıcaklık ve dayanıklılık için yüksek kaliteli akrilikten yapılmış olup aynı zamanda dokunmatik ekran uyumlu bir tasarıma sahiptir. Yalıtımlı astar, elastik manşetler ve şık bir görünümle birlikte günlük soğuk koşullarda giymek için mükemmeldir.',
                ],

                '4' => [
                    'description'      => 'Arctic Warmth Wool Blend Socks, soğuk mevsimlerde sıcak ve rahat ayaklarınızın vazgeçilmez arkadaşıdır. Premium bir karışım olan Merino yünü, akrilik, naylon ve spandex ile üretilen bu çoraplar eşsiz sıcaklık ve konfor sağlamak için tasarlanmıştır. Yün karışımı, çorapların en soğuk sıcaklıklarda bile ayaklarınızın sıcak kalmasını sağlar, bu da bu çorapları kış maceraları için mükemmel bir seçenek veya evde rahatlıkla kullanmanızı sağlar. Çorapların yumuşak ve rahat dokusu cildinizde lüks bir his yaratır. Bu yün karışımı çorapların sağladığı peluş sıcaklık ile soğuk ayaklara veda edin. Dayanıklılık için tasarlanan çoraplar, takviyeli topuk ve burun ile yüksek aşınma bölgelerine ekstra dayanıklılık sağlar. Bu, çoraplarınızın zamanın testine dayanmasını ve uzun süreli konfor ve rahatlık sağlamasını sağlar. Malzemenin nefes alabilir yapısı aşırı ısınmayı önler, böylece ayaklarınız gün boyunca rahat ve kuru kalır. Kış yürüyüşü için dışarı çıkıyor veya içeride rahatlığın tadını çıkarıyorsanız, bu çoraplar sıcaklık ve nefes alabilirlik arasında mükemmel bir denge sunar. Çeşitli durumlar için uygun ve şık olan bu yün karışımı çorapları favori botlarınızla kombinleyerek kışın modaya uygun bir görünüm elde edebilir veya evde en üst düzeyde rahatlık için giyebilirsiniz. Kış gardırobunuzu yükseltin ve Arctic Warmth Wool Blend Socks ile konforu önceliklendirin. Ayaklarınıza hak ettikleri lüksü sunun ve tüm mevsim boyunca süren bir rahatlık dünyasına adım atın.',
                    'meta-description' => 'meta açıklama',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Başlık',
                    'name'             => 'Arctic Warmth Wool Blend Socks',
                    'sort-description' => 'Arctic Warmth Wool Blend Socks\'un eşsiz sıcaklık ve konforunu deneyimleyin. Merino yünü, akrilik, naylon ve spandex karışımından üretilen bu çoraplar soğuk havalarda en üst düzeyde rahatlık sunar. Dayanıklılık için takviyeli topuk ve buruna sahip olan bu çok yönlü ve şık çoraplar çeşitli durumlar için mükemmeldir.',
                ],

                '5' => [
                    'description'      => 'Arctic Frost Winter Accessories Bundle\'ı tanıtıyoruz, soğuk kış günlerinde sıcak, şık ve bağlantılı kalmak için ideal çözümünüz. Bu özenle seçilmiş set, uyumlu bir bütün oluşturmak için dört temel kış aksesuarını bir araya getirir. Akrilik ve yün karışımından dokunan lüks şal, sadece bir katman sıcaklık katmakla kalmaz, aynı zamanda kış gardırobunuza bir dokunuş zarafet getirir. Özenle tasarlanmış yumuşak örme bere, sizi sıcak tutmayı vaat ederken görünümünüze moda bir hava katar. Ama burada bitmiyor - setimiz ayrıca dokunmatik uyumlu eldivenler içeriyor. Cihazlarınızı kolayca kullanırken sıcaklıktan ödün vermeden bağlantıda kalın. Akıllı telefonunuzda çağrı cevaplarken, mesaj gönderirken veya kış anılarını yakalarken, bu eldivenler stilinizi bozmadan kolaylık sağlar. Çorapların yumuşak ve rahat dokusu cildinizde lüks bir his yaratır. Bu yün karışımı çorapların sağladığı peluş sıcaklık ile soğuk ayaklara veda edin. Arctic Frost Winter Accessories Bundle, sadece işlevsellikle ilgili değildir; aynı zamanda kış modasının bir ifadesidir. Her parça, sizi soğuktan korumanın yanı sıra buzlu mevsimde stilinizi yükseltmek için tasarlanmıştır. Bu paket için seçilen malzemeler dayanıklılık ve konforu önceliklendirir, böylece kış cennetinin tadını stil içinde çıkarabilirsiniz. Kendinizi şımartmak veya mükemmel bir hediye arıyorsanız, Arctic Frost Winter Accessories Bundle çok yönlü bir seçenektir. Tatil sezonunda özel birini mutlu et veya kendi kış gardırobunu bu şık ve işlevsel setle yükselt. Mükemmel aksesuarlara sahip olduğunuzdan emin olarak buzla güvenle kucaklaşın ve sıcak ve şık kalın.',
                    'meta-description' => 'meta açıklama',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Başlık',
                    'name'             => 'Arctic Frost Winter Accessories',
                    'sort-description' => 'Arctic Frost Winter Accessories Bundle ile kışın soğuğunu kucaklayın. Bu özenle seçilmiş set, lüks bir şal, rahat bir bere, dokunmatik uyumlu eldivenler ve yün karışımı çorapları içerir. Şık ve işlevsel olan bu set, dayanıklılık ve konforu sağlamak için yüksek kaliteli malzemelerden üretilmiştir. Kış gardırobunuzu yükseltin veya mükemmel bir hediye seçeneğiyle özel birini mutlu edin.',
                ],

                '6' => [
                    'description'      => 'Arctic Frost Winter Accessories Bundle\'ı tanıtıyoruz, soğuk kış günlerinde sıcak, şık ve bağlantılı kalmak için ideal çözümünüz. Bu özenle seçilmiş set, uyumlu bir bütün oluşturmak için dört temel kış aksesuarını bir araya getirir. Akrilik ve yün karışımından dokunan lüks şal, sadece bir katman sıcaklık katmakla kalmaz, aynı zamanda kış gardırobunuza bir dokunuş zarafet getirir. Özenle tasarlanmış yumuşak örme bere, sizi sıcak tutmayı vaat ederken görünümünüze moda bir hava katar. Ama burada bitmiyor - setimiz ayrıca dokunmatik uyumlu eldivenler içeriyor. Cihazlarınızı kolayca kullanırken sıcaklıktan ödün vermeden bağlantıda kalın. Akıllı telefonunuzda çağrı cevaplarken, mesaj gönderirken veya kış anılarını yakalarken, bu eldivenler stilinizi bozmadan kolaylık sağlar. Çorapların yumuşak ve rahat dokusu cildinizde lüks bir his yaratır. Bu yün karışımı çorapların sağladığı peluş sıcaklık ile soğuk ayaklara veda edin. Arctic Frost Winter Accessories Bundle, sadece işlevsellikle ilgili değildir; aynı zamanda kış modasının bir ifadesidir. Her parça, sizi soğuktan korumanın yanı sıra buzlu mevsimde stilinizi yükseltmek için tasarlanmıştır. Bu paket için seçilen malzemeler dayanıklılık ve konforu önceliklendirir, böylece kış cennetinin tadını stil içinde çıkarabilirsiniz. Kendinizi şımartmak veya mükemmel bir hediye arıyorsanız, Arctic Frost Winter Accessories Bundle çok yönlü bir seçenektir. Tatil sezonunda özel birini mutlu et veya kendi kış gardırobunu bu şık ve işlevsel setle yükselt. Mükemmel aksesuarlara sahip olduğunuzdan emin olarak buzla güvenle kucaklaşın ve sıcak ve şık kalın.',
                    'meta-description' => 'meta açıklama',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Başlık',
                    'name'             => 'Arctic Frost Winter Accessories Bundle',
                    'sort-description' => 'Arctic Frost Winter Accessories Bundle ile kışın soğuğunu kucaklayın. Bu özenle seçilmiş set, lüks bir şal, rahat bir bere, dokunmatik uyumlu eldivenler ve yün karışımı çorapları içerir. Şık ve işlevsel olan bu set, dayanıklılık ve konforu sağlamak için yüksek kaliteli malzemelerden üretilmiştir. Kış gardırobunuzu yükseltin veya mükemmel bir hediye seçeneğiyle özel birini mutlu edin.',
                ],

                '7' => [
                    'description'      => 'OmniHeat Men\'s Solid Hooded Puffer Jacket\'ı tanıtıyoruz, soğuk mevsimlerde sıcak ve şık kalmak için güvenilir bir çözüm. Bu ceket dayanıklılık ve sıcaklık göz önünde bulundurularak tasarlanmıştır, böylece güvendiğiniz bir arkadaşınız haline gelir. Kapüşonlu tasarım sadece bir stil dokunuşu değil, aynı zamanda ekstra sıcaklık sağlar, soğuk rüzgarlardan ve hava koşullarından korur. Tam kollu tasarım, omuzdan bileğe kadar tam kapsama sağlar, böylece sıcak kalırsınız. Eklem cepleri ile donatılan bu puffer ceket, eşyalarınızı taşımak veya ellerinizi sıcak tutmak için kolaylık sağlar. Yalıtımlı sentetik dolgu artırılmış sıcaklık sunar, bu da soğuk günler ve geceler için idealdir. Dayanıklı polyester dış yüzey ve astar ile yapılan bu ceket, dayanıklı ve hava koşullarına dayanıklıdır. 5 çekici renkte mevcut olan bu ceketten stilinize ve tercihinize uygun olanı seçebilirsiniz. Çok yönlü ve işlevsel olan OmniHeat Men\'s Solid Hooded Puffer Jacket, işe gitmek, rahat bir geziye çıkmak veya açık hava etkinliğine katılmak için uygundur. OmniHeat Men\'s Solid Hooded Puffer Jacket ile stil, konfor ve işlevselliğin mükemmel bir karışımını deneyimleyin. Kış gardırobunuzu yükseltin ve dışarıyı kucaklarken sıcak ve rahat kalın. Soğuğa karşı stil sahibi olun ve bu önemli parça ile bir açıklama yapın.',
                    'meta-description' => 'meta açıklama',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Başlık',
                    'name'             => 'OmniHeat Men\'s Solid Hooded Puffer Jacket',
                    'sort-description' => 'OmniHeat Men\'s Solid Hooded Puffer Jacket ile sıcak ve şık kalın. Bu ceket, eklem cepleriyle birlikte maksimum sıcaklık sağlamak için tasarlanmıştır. Yalıtımlı malzeme, soğuk havalarda sizi sıcak tutar. 5 çekici renkte mevcut olması, çeşitli durumlar için çok yönlü bir seçenek yapar.',
                ],

                '8' => [
                    'description'      => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu, soğuk mevsimlerde sıcak ve şık kalmanız için ideal bir çözümdür. Bu mont, dayanıklılık ve sıcaklık gözetilerek tasarlanmış olup güvenilir bir arkadaşınız haline gelir. Kapüşonlu tasarım sadece bir stil dokunuşu eklemekle kalmaz, aynı zamanda ekstra sıcaklık sağlar, soğuk rüzgarlardan ve hava koşullarından sizi korur. Tam kollu tasarımı, omuzdan bileğe kadar sizi sıcacık tutar. Eklem cepleriyle donatılmış olan bu puf mont, eşyalarınızı taşımak veya ellerinizi sıcak tutmak için kolaylık sağlar. Yalıtımlı sentetik dolgu, soğuk günler ve geceler için daha fazla sıcaklık sunar. Dayanıklı polyester dış kabuk ve astardan yapılan bu mont, uzun ömürlü ve hava koşullarına dayanıklıdır. 5 çekici renkte mevcut olması, tarzınıza ve tercihinize uygun olanı seçmenizi sağlar. Çok yönlü ve işlevsel olan OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu, işe giderken, rahat bir geziye çıkarken veya açık havada bir etkinliğe katılırken uygun bir seçenektir. Stil, konfor ve işlevselliğin mükemmel bir karışımını OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu ile deneyimleyin. Kış gardırobunuzu yükseltin ve dışarıyı kucaklarken sıcacık kalın. Soğuğa karşı stil sahibi olun ve bu temel parça ile bir açıklama yapın.',
                    'meta-description' => 'meta açıklama',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Başlık',
                    'name'             => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu-Mavi-Sarı-M',
                    'sort-description' => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu ile sıcak ve şık kalın. Bu mont, ultimate sıcaklık sağlamak ve eklem cepleriyle donatılmış olup ekstra kolaylık sağlamak için tasarlanmıştır. Yalıtımlı malzeme, soğuk havalarda sizi sıcak tutar. 5 çekici renkte mevcut olması, çeşitli durumlar için çok yönlü bir seçenek yapar.',
                ],

                '9' => [
                    'description'      => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu ile soğuk mevsimlerde sıcak ve şık kalmanız için ideal bir çözüm sunuyoruz. Bu mont, dayanıklılık ve sıcaklık gözetilerek tasarlanmış olup güvenilir bir arkadaşınız haline gelir. Kapüşonlu tasarım sadece bir stil dokunuşu eklemekle kalmaz, aynı zamanda ekstra sıcaklık sağlar, soğuk rüzgarlardan ve hava koşullarından sizi korur. Tam kollu tasarımı, omuzdan bileğe kadar sizi sıcacık tutar. Eklem cepleriyle donatılmış olan bu puf mont, eşyalarınızı taşımak veya ellerinizi sıcak tutmak için kolaylık sağlar. Yalıtımlı sentetik dolgu, soğuk günler ve geceler için daha fazla sıcaklık sunar. Dayanıklı polyester dış kabuk ve astardan yapılan bu mont, uzun ömürlü ve hava koşullarına dayanıklıdır. 5 çekici renkte mevcut olması, tarzınıza ve tercihinize uygun olanı seçmenizi sağlar. Çok yönlü ve işlevsel olan OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu, işe giderken, rahat bir geziye çıkarken veya açık havada bir etkinliğe katılırken uygun bir seçenektir. Stil, konfor ve işlevselliğin mükemmel bir karışımını OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu ile deneyimleyin. Kış gardırobunuzu yükseltin ve dışarıyı kucaklarken sıcacık kalın. Soğuğa karşı stil sahibi olun ve bu temel parça ile bir açıklama yapın.',
                    'meta-description' => 'meta açıklama',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Başlık',
                    'name'             => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu-Mavi-Sarı-L',
                    'sort-description' => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu ile sıcak ve şık kalın. Bu mont, ultimate sıcaklık sağlamak ve eklem cepleriyle donatılmış olup ekstra kolaylık sağlamak için tasarlanmıştır. Yalıtımlı malzeme, soğuk havalarda sizi sıcak tutar. 5 çekici renkte mevcut olması, çeşitli durumlar için çok yönlü bir seçenek yapar.',
                ],

                '10' => [
                    'description'      => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu, soğuk mevsimlerde sıcak ve şık kalmanız için ideal bir çözümdür. Bu mont, dayanıklılık ve sıcaklık gözetilerek tasarlanmış olup güvenilir bir arkadaşınız haline gelir. Kapüşonlu tasarım sadece bir stil dokunuşu eklemekle kalmaz, aynı zamanda ekstra sıcaklık sağlar, soğuk rüzgarlardan ve hava koşullarından sizi korur. Tam kollu tasarımı, omuzdan bileğe kadar sizi sıcacık tutar. Eklem cepleriyle donatılmış olan bu puf mont, eşyalarınızı taşımak veya ellerinizi sıcak tutmak için kolaylık sağlar. Yalıtımlı sentetik dolgu, soğuk günler ve geceler için daha fazla sıcaklık sunar. Dayanıklı polyester dış kabuk ve astardan yapılan bu mont, uzun ömürlü ve hava koşullarına dayanıklıdır. 5 çekici renkte mevcut olması, tarzınıza ve tercihinize uygun olanı seçmenizi sağlar. Çok yönlü ve işlevsel olan OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu, işe giderken, rahat bir geziye çıkarken veya açık havada bir etkinliğe katılırken uygun bir seçenektir. Stil, konfor ve işlevselliğin mükemmel bir karışımını OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu ile deneyimleyin. Kış gardırobunuzu yükseltin ve dışarıyı kucaklarken sıcacık kalın. Soğuğa karşı stil sahibi olun ve bu temel parça ile bir açıklama yapın.',
                    'meta-description' => 'meta açıklama',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Başlık',
                    'name'             => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu-Mavi-Yeşil-M',
                    'sort-description' => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu ile sıcak ve şık kalın. Bu mont, ultimate sıcaklık sağlamak ve eklem cepleriyle donatılmış olup ekstra kolaylık sağlamak için tasarlanmıştır. Yalıtımlı malzeme, soğuk havalarda sizi sıcak tutar. 5 çekici renkte mevcut olması, çeşitli durumlar için çok yönlü bir seçenek yapar.',
                ],

                '11' => [
                    'description'      => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu ile sıcak ve şık kalın. Bu mont, soğuk mevsimlerde sıcak ve şık kalmanız için ideal bir çözümdür. Dayanıklılık ve sıcaklık gözetilerek tasarlanmış olup güvenilir bir arkadaşınız haline gelir. Kapüşonlu tasarım sadece bir stil dokunuşu eklemekle kalmaz, aynı zamanda ekstra sıcaklık sağlar, soğuk rüzgarlardan ve hava koşullarından sizi korur. Tam kollu tasarımı, omuzdan bileğe kadar sizi sıcacık tutar. Eklem cepleriyle donatılmış olan bu puf mont, eşyalarınızı taşımak veya ellerinizi sıcak tutmak için kolaylık sağlar. Yalıtımlı sentetik dolgu, soğuk günler ve geceler için daha fazla sıcaklık sunar. Dayanıklı polyester dış kabuk ve astardan yapılan bu mont, uzun ömürlü ve hava koşullarına dayanıklıdır. 5 çekici renkte mevcut olması, tarzınıza ve tercihinize uygun olanı seçmenizi sağlar. Çok yönlü ve işlevsel olan OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu, işe giderken, rahat bir geziye çıkarken veya açık havada bir etkinliğe katılırken uygun bir seçenektir. Stil, konfor ve işlevselliğin mükemmel bir karışımını OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu ile deneyimleyin. Kış gardırobunuzu yükseltin ve dışarıyı kucaklarken sıcacık kalın. Soğuğa karşı stil sahibi olun ve bu temel parça ile bir açıklama yapın.',
                    'meta-description' => 'meta açıklama',
                    'meta-keywords'    => 'meta1, meta2, meta3',
                    'meta-title'       => 'Meta Başlık',
                    'name'             => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu-Mavi-Yeşil-L',
                    'sort-description' => 'OmniHeat Erkeklerin Düz Kapüşonlu Puf Montu ile sıcak ve şık kalın. Bu mont, ultimate sıcaklık sağlamak ve eklem cepleriyle donatılmış olup ekstra kolaylık sağlamak için tasarlanmıştır. Yalıtımlı malzeme, soğuk havalarda sizi sıcak tutar. 5 çekici renkte mevcut olması, çeşitli durumlar için çok yönlü bir seçenek yapar.',
                ],
            ],

            'product-bundle-option-translations' => [
                '1' => [
                    'label' => 'Paket Seçeneği 1',
                ],

                '2' => [
                    'label' => 'Paket Seçeneği 1',
                ],

                '3' => [
                    'label' => 'Paket Seçeneği 2',
                ],

                '4' => [
                    'label' => 'Paket Seçeneği 2',
                ],
            ],
        ],
    ],

    'installer' => [
        'index' => [
            'create-administrator' => [
                'admin'            => 'Yönetici',
                'bagisto'          => 'Bagisto',
                'confirm-password' => 'Şifreyi Onayla',
                'email'            => 'E-posta',
                'email-address'    => 'admin@ornek.com',
                'password'         => 'Şifre',
                'title'            => 'Yönetici Oluştur',
            ],

            'environment-configuration' => [
                'allowed-currencies'   => 'İzin Verilen Para Birimleri',
                'allowed-locales'      => 'İzin Verilen Lokaller',
                'application-name'     => 'Uygulama Adı',
                'bagisto'              => 'Bagisto',
                'database-connection'  => 'Veritabanı Bağlantısı',
                'database-hostname'    => 'Veritabanı Sunucu Adı',
                'database-name'        => 'Veritabanı Adı',
                'database-password'    => 'Veritabanı Parolası',
                'database-port'        => 'Veritabanı Bağlantı Noktası',
                'database-prefix'      => 'Veritabanı Öneki',
                'database-prefix-help' => 'Öneki 4 karakter uzunluğunda olmalı ve yalnızca harfler, sayılar ve alt çizgi içerebilir.',
                'database-username'    => 'Veritabanı Kullanıcı Adı',
                'default-currency'     => 'Varsayılan Para Birimi',
                'default-locale'       => 'Varsayılan Lokal',
                'default-timezone'     => 'Varsayılan Zaman Dilimi',
                'default-url'          => 'Varsayılan URL',
                'default-url-link'     => 'https://localhost',
                'euro'                 => 'Euro (EUR)',
                'mysql'                => 'MySQL',
                'pgsql'                => 'PgSQL',
                'select-timezone'      => 'Zaman Dilimi Seç',
                'sqlsrv'               => 'SQLSRV',
                'title'                => 'Mağaza Yapılandırması',
                'turkish-lira'         => 'Türk Lirası (TRY)',
                'united-states-dollar' => 'Amerikan Doları (USD)',
                'warning-message'      => 'Dikkat! Varsayılan sistem dili ve varsayılan para birimi ayarları kalıcıdır ve bir kez ayarlandığında değiştirilemez.',
            ],

            'sample-products' => [
                'download-sample' => 'örnek indir',
                'no'              => 'Hayır',
                'sample-products' => 'Örnek Ürünler',
                'title'           => 'Örnek Ürünler',
                'yes'             => 'Evet',
            ],

            'installation-processing' => [
                'bagisto'      => 'Bagisto Kurulumu',
                'bagisto-info' => 'Veritabanı tabloları oluşturuluyor, bu birkaç dakika sürebilir',
                'title'        => 'Kurulum',
            ],

            'installation-completed' => [
                'admin-panel'                => 'Yönetici Paneli',
                'bagisto-forums'             => 'Bagisto Forumu',
                'customer-panel'             => 'Müşteri Paneli',
                'explore-bagisto-extensions' => 'Bagisto Uzantılarını Keşfedin',
                'title'                      => 'Kurulum Tamamlandı',
                'title-info'                 => 'Bagisto sisteminize başarıyla kuruldu.',
            ],

            'ready-for-installation' => [
                'create-databsae-table'   => 'Veritabanı tablosu oluştur',
                'install'                 => 'Yükleme',
                'install-info'            => 'Kurulum için Bagisto',
                'install-info-button'     => 'Aşağıdaki düğmeye tıklayın',
                'populate-database-table' => 'Veritabanı tablolarını doldur',
                'start-installation'      => 'Kurulumu Başlat',
                'title'                   => 'Kurulum için Hazır',
            ],

            'start' => [
                'locale'        => 'Yerel',
                'main'          => 'Başlangıç',
                'select-locale' => 'Yerel Seçin',
                'title'         => 'Bagisto kurulumunuz',
                'welcome-title' => 'Bagisto\'ya hoş geldiniz',
            ],

            'server-requirements' => [
                'calendar'    => 'Takvim',
                'ctype'       => 'cType',
                'curl'        => 'cURL',
                'dom'         => 'dom',
                'fileinfo'    => 'Dosya Bilgisi',
                'filter'      => 'Filtre',
                'gd'          => 'GD',
                'hash'        => 'Hash',
                'intl'        => 'intl',
                'json'        => 'JSON',
                'mbstring'    => 'mbstring',
                'openssl'     => 'openssl',
                'pcre'        => 'pcre',
                'pdo'         => 'pdo',
                'php'         => 'PHP',
                'php-version' => '8.1 veya üstü',
                'session'     => 'oturum',
                'title'       => 'Sunucu Gereksinimleri',
                'tokenizer'   => 'tokenizer',
                'xml'         => 'XML',
            ],

            'back'                     => 'Geri',
            'bagisto'                  => 'Bagisto',
            'bagisto-info'             => 'Webkul tarafından geliştirilen bir Topluluk Projesi',
            'bagisto-logo'             => 'Bagisto Logosu',
            'continue'                 => 'Devam Et',
            'english'                  => 'İngilizce',
            'installation-description' => 'Bagisto kurulumu genellikle birkaç adım içerir. İşte Bagisto\'nun kurulum sürecine genel bir bakış',
            'installation-info'        => 'Sizi burada görmekten mutluluk duyuyoruz!',
            'installation-title'       => 'Kurulum\'a Hoş Geldiniz',
            'title'                    => 'Bagisto Kurulum Sihirbazı',
            'turkish'                  => 'Türkçe',
            'webkul'                   => 'Webkul',
        ],
    ],
];
