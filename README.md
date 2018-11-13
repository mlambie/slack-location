# slack-location
End point for Slack location updates via IFTTT webhook integration.

## Purpose

I want Slack to update my status emoji with the flag of the country I'm in. I use IFTTT's webhook integration in conjunction with the Location service to fire off a request that updates Slack.

## Set up

* Obtain your own token from the [Slack Custom Integration - Legacy Token](https://api.slack.com/custom-integrations/legacy-tokens) page. 
* Rename `secrets.template.php` to `secrets.php` and replace the two variables.
* Create an applet connecting the [Location trigger](https://ifttt.com/services/location) with the [webhook action](https://ifttt.com/services/maker_webhooks).

## Usage

``` $ curl http://server.com/slack.php?country=AU&status=STATUS&secret=YOURSECRET```