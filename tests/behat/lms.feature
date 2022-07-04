@local @local_sandbox
Feature: Sandbox plugin in the LMS.

  Background:
    Given I visit "/local/sandbox/index.php"

  Scenario: It works.
    Then I should see "Sandbox Plugin"
