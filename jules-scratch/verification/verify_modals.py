from playwright.sync_api import sync_playwright, Page, expect

def test_modals(page: Page):
    # 1. Arrange: Go to the homepage.
    page.goto("http://127.0.0.1:5173/")

    # Wait for the page to load
    page.wait_for_load_state("networkidle")
    page.wait_for_selector(".get-started-btn", timeout=60000)

    # 2. Act: Find the "Get Started" button and click it.
    get_started_button = page.locator(".get-started-btn").first
    get_started_button.click()

    # 3. Assert: Confirm the login modal is visible.
    expect(page.locator("#login-form")).to_be_visible()

    # 4. Screenshot: Capture the login modal.
    page.screenshot(path="jules-scratch/verification/login_modal.png")

    # 5. Act: Find the "Sign up" link and click it.
    show_register_form_button = page.locator("#show-register-form")
    show_register_form_button.click()

    # 6. Assert: Confirm the registration modal is visible.
    expect(page.locator("#register-form")).to_be_visible()

    # 7. Screenshot: Capture the registration modal.
    page.screenshot(path="jules-scratch/verification/registration_modal.png")

with sync_playwright() as p:
    browser = p.chromium.launch()
    page = browser.new_page()
    try:
        test_modals(page)
    except Exception as e:
        print(e)
    finally:
        browser.close()
