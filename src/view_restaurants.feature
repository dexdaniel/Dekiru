Feature: Browse Restaurants
  In order to find a good restaurant
  As a user
  I want to be able to view restaurants

  Scenario: List Restaurants
    Given I have the restaurants Mr. Italian, Burbur King
    When I go to the list of restaurants
    Then I should see "Mr. Italian"
    And I should see "Burbur King"

  Scenario: Order by Name
    Given I have the restaurants Yakiniku, SushiA
    When I order the list by name (asc)
    Then I should see "SushiA" before "Yakiniku"

  Scenario: Order by Date Added
    Given I have restaurants added today, yesterday
    When I order the list by created_at (asc)
    Then I should see "yesterday" before "today"

  Scenario: Order by Average Rating

  Scenario: Order by Number of Reviews
    Given I have a restaurant named SushiA with 1 reviews
    And I have a restaurant named RamenB with 2 reviews
    When I order the list by reviews_count (desc)
    Then I should see "RamenB" before "SushiA" 
