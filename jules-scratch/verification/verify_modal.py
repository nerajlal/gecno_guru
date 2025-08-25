from playwright.sync_api import Page, expect
import pathlib

def test_modal_on_service_page(page: Page):
    """
    This test verifies that the login/registration modal opens correctly
    on a single service page.
    """
    # 1. Arrange: Go to the static resume page.
    html_file = pathlib.Path("jules-scratch/verification/temp_resume.html").resolve()
    page.goto(f"file://{html_file}")

    # 2. Act: Click the "Get Started" button in the header.
    get_started_button = page.locator(".login-trigger").first
    get_started_button.click()

    # 3. Assert: Check that the modal is visible.
    modal = page.locator("#auth-modal")
    expect(modal).to_be_visible()

    # 4. Screenshot: Capture the page with the modal open.
    page.screenshot(path="jules-scratch/verification/modal_on_service_page.png")
