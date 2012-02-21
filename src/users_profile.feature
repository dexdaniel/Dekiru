Feature: User profile
  In order to have compete profile
  As a user
  I want to register and add my information

  @omniauth_test
  Scenario: A user successfully signs in with Facebook
    Given I am on the homepage
    When I log in with my Facebook account
    Then I should see the flash message "Welcome"

  @omniauth_test_failure
  Scenario: A user fails to sign in with Facebook
    Given I am on the homepage
    When I log in with an invalid Facebook account 
    Then I should see the flash message "Failed"

  @omniauth_test @addReligions
  Scenario: A user add a religion
    Given I am on the homepage
    And I log in with my Facebook account
    And I go to edit my profile
    When I select "Alexism" for my religion
    And I update my profile
    Then I should see "Alexism"
    And I should see the flash message "Profile updated"
    
