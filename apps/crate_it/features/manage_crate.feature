@javascript
Feature: Manage the items in a crate (CRUD)
  As a user
  I want to create virtual folders, rename items

  Background:
    Given I'm logged in to ownCloud as "test"
    And I go to the crate_it page
    And I delete the default crate
    Then I should see the default crate already created and selected
    And I go to the files page
    And I have no files
    And I have file "file.txt" within the root folder
    When I add "file.txt" to the default crate
    Then I go to the crate_it page

  #CRATEIT-106
  Scenario: A user can delete an item from their crate
    When I delete "file.txt"
    Then I should see "Remove item from crate?"
    When I click "Remove"
    Then "file.txt" should not be in the crate

  #CRATEIT-106
  Scenario: A user can cancel the delete action
    When I delete "file.txt"
    Then I click "Cancel"
    Then "file.txt" should be in the crate

  #CRATEIT-106
  Scenario: Deleting a folder also deletes any contents of that folder
    When I go to the files page
    And I have folder "folder1" within the root folder
    And I have file "file2.txt" within "/folder1"
    And I go to the crate_it page

  #CRATEIT-106
  Scenario: A user can rename an item in their crate
    When I rename file "file.txt"
    Then I fill in "New name:" with "newname.txt"
    And I click "Rename"
    Then "file.txt" should not be in the crate
    And "newname.txt" should be in the crate

  #CRATEIT-106
  Scenario: A user can cancel renaming an item in their crate
    When I rename file "file.txt"
    Then I click "Cancel"
    Then "file.txt" should be in the crate

  #CRATEIT-106
  Scenario: A user can not rename an item in a crate unless the name is valid
    When I rename file "file.txt"
    Then the "Rename" button should be disabled
    # TODO: Need rules of what constitutes a valid name





