@local @local_sandbox @app @javascript
Feature: Sandbox plugin in the App.

  Background:
    Given the following "users" exist:
      | username |
      | student  |
    And I entered the app as "student"

  Scenario: It submits forms.
    When I press the more menu button in the app
    Then I should find "Sandbox" in the app

    When I press "Sandbox" in the app
    And I press "Jan 1, 2022" in the app
    And I press "Mar" in the app
    And I press "25" in the app
    And I press "2020" in the app
    And I press "Done" in the app
    And I press "Three" in the app
    And I press "Save" in the app
    Then I should find "Hidden: foobar" in the app
    And I should find "Date: 2020-03-25" in the app
    And I should find "Radio: three" in the app
