@javascript
Feature: Publish crates to an endpoint
  As a user
  I want to publish crates to an endpoint
  
  Background:
    Given I have no crates
    And I'm logged in to ownCloud as "test"
    And I go to the crate_it page


  #CRATEIT-178
  Scenario: A user can see a metadata summary before publishing
    When I click on "add-creator"
    Then I fill in the following:
      | add-creator-name  | Joe Bloggs     |
      | add-creator-email | joe@bloggs.org |
    When I press "Add" on the popup dialog
    And I expand the grant number metadata section
    When I click on "add-activity"
    Then I fill in the following:
      | add-grant-number      | 123123              |
      | add-grant-year        | 2007                |
      | add-grant-institution | The Ponds Institute |
      | add-grant-title       | Anti Aging Creams   |
    When I press "Add" on the popup dialog
    When I click on "publish"
    Then I should see "Joe Bloggs"
    And I should see "joe@bloggs.org"
    And I should see "123123"
    And I should see "2007"
    And I should see "Anti Aging Creams"
