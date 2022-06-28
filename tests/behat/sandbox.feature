@local @local_sandbox
Feature: Sandbox pugin.

  Background:
    Given I visit "/local/sandbox/index.php"

  Scenario: It works.
    Then I should see "Sandbox Plugin"
