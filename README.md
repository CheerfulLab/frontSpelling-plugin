#Fronted mistake

Simply plugin that allow user to check mistake and send their responce to administration site for OctoberCms.

## Use

Plugin can be add at page any page by
{% component 'frontendspelling' %} 

After include at page available send data by key pressed ctrl+enter:
![Popup](https://github.com/CheerfulLab/frontSpelling-plugin/raw/master/docs/images/frontend.jpg?raw=true)

At admin panel all user response will be stay at
![Administrator panel](https://github.com/CheerfulLab/frontSpelling-plugin/raw/master/docs/images/backend.jpg?raw=true)

You can enable email notification at settings menu. You can manual set up template "cheerfullab.frontendspelling::mail.notify" with information message about new request.

Template variables:

- error_form_url - Path to admin menu with current request

## For developer
Protocol interaction with background describe [here](https://github.com/CheerfulLab-plugin/frontSpelling/blob/master/docs/Transfer.md)