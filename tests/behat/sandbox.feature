@local @local_sandbox
Feature: Sandbox pugin.

  Background:
    Given I visit "/local/sandbox/index.php"

  Scenario: It works.
    Then I should see "Sandbox Plugin"

  Scenario: It has a table that does not exist (this should fail).
    Then the following should exist in the "doesnotexist" table:
      | Name             |
      | thisdoesnotexist |

  Scenario: It has a table of users (this should pass).
    Then the following should exist in the "users" table:
      | Name     |
      | John Doe |
      | Amy Doe  |

  Scenario: It has a table of users with roles (this should pass).
    Then the following should exist in the "users" table:
      | Name     | Role    |
      | John Doe | Student |
      | Amy Doe  | Teacher |

  Scenario: It has a table of user names with roles (this should pass).
    Then the following should exist in the "users" table:
      | Name | Role    |
      | John | Student |
      | Amy  | Teacher |

  Scenario: It has a table of competencies (this should pass).
    Then the following should exist in the "competencies" table:
      | Name                              | Rating | Proficient |
      | Salads salads Path: Cookery /     | Good   | Yes        |
      | Desserts desserts Path: Cookery / | Great  | Yes        |
      | Cakes cakes Path: Cookery /       | Great  | Yes        |
