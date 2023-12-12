@local @local_sandbox @coverage
Feature: Gathers test coverage.

  Background:
    Given I visit "/local/sandbox/coverage.php"

  Scenario: The meaning of life.
    When I set the field "question" to "What is the meaning of life?"
    And I press "Find out"
    Then I should see "42"

  Scenario: The chicken.
    When I set the field "question" to "Why did the chicken cross the road?"
    And I press "Find out"
    Then I should see "To get to the other side"
