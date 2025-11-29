export async function loginAsAdmin(page) {
    /**
     * Admin credentials.
     */
    const adminCredentials = {
        email: "admin@erho.test",
        password: "!Dem0Str0ngP4ssw0rd!",
    };

    /**
     * Authenticate the admin user.
     */
    await page.goto("admin/login");
    await page.fill('input[name="email"]', adminCredentials.email);
    await page.fill('input[name="password"]', adminCredentials.password);
    await page.press('input[name="password"]', "Enter");

    /**
     * Wait for the dashboard to load.
     */
    await page.waitForURL("**/admin/dashboard");

    return adminCredentials;
}
