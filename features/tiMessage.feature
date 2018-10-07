Feature: Provide a JSON API endpoint

  In order to build endpoint
  As a JSON API developer
  I need to allow Create functionality

  Scenario: Can add a new tiMessage
    Given the request body is:
      """
      {
          "cid": "a65f7960-a19d-49c1-a915-c48f036e8887",
          "vst": {
              "ip": "0.0.0.0",
              "lg": "fr-CH",
              "rf": "http://www.beeckon.swiss",
              "ua": "Mozilla/5.0 (X11; Linux x86_64; rv:12.0) Gecko/20100101 Firefox/21.0"
          },
          "url": "http://vantino.com/mno",
          "sid": "110ec58a-a0f2-4ac4-8393-c866d813b8d1",
          "uid": "4648471f-a360-471f-91f1-008b75d74f3b"
      }
      """
    When I request "/tmsg" using HTTP POST
    Then the response code is 201
