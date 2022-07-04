@local @local_sandbox @app @javascript
Feature: Sandbox plugin in the App.

  Background:
    Given the following "users" exist:
      | username |
      | student  |
    And I entered the app as "student"

  Scenario: It works.
    When I press the more menu button in the app
    Then I should find "Sandbox" in the app

    When I press "Sandbox" in the app
    Then I should find "Sandbox Plugin" in the app
