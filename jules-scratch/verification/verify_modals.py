from playwright.sync_api import sync_playwright, Page, expect

def test_modals(page: Page):
    # 1. Arrange: Go to the homepage.
    page.goto("http://127.0.0.1:5173/")

    # Wait for the page to load
    page.wait_for_load_state("networkidle")

    # 2. Act: Open the modal using JavaScript
    page.evaluate("openModal()")
    page.evaluate("registerForm.classList.remove('hidden')")
    page.evaluate("loginForm.classList.add('hidden')")


    # 3. Assert: Confirm the registration modal is visible.
    expect(page.locator("#register-form")).to_be_visible()

    # 4. Screenshot: Capture the registration modal.
    page.screenshot(path="jules-scratch/verification/registration_modal.png")

    # 5. Act: Find the "Log in" link and click it.
    show_login_form_button = page.locator("#show-login-form")
    show_login_form_button.click()

    # 6. Assert: Confirm the login modal is visible.
    expect(page.locator("#login-form")).to_be_visible()

    # 7. Screenshot: Capture the login modal.
    page.screenshot(path="jules-scratch/verification/login_modal.png")

with sync_playwright() as p:
    browser = p.chromium.launch()
    page = browser.new_page()
    try:
        test_modals(page)
    except Exception as e:
        print(e)
    finally:
        browser.close()
