# Data transfer
This page describe data transfer protocol between backend and frontend

## Request to backend

Backend expect get post request with data:
```
$_POST[‘textError’] = array(
	‘url’ => ‘’, // Page url where user find mistake. Mandatory
‘text’ => ‘’, // Text with mistake . Mandatory
‘comment’ => ‘’, // Comment that user add
);
```
## Responce from backend

All responce message has same structure:

```
$response= array(
	‘status’ => bool,
	data => string
);
```

Status true means that record successfully add to database.
Status false means that throw any exception. Attribute data contain message with description of error.

Possible responces:

```
array(‘status’ => true) // Record successfully added
array(‘status’ => false, ‘message’ => ‘Wrong method’) // Record not added. Request had wrong type
array(‘status’ => false, ‘message’ => ‘Not get mandatory parameter textError’) // Record not added. Request information not include mandatory array with data
array(‘status’ => false, ‘message’ => ‘Not get mandatory parameter url’) // Record not added. Request information not include mandatory parameter url
array(‘status’ => false, ‘message’ => ‘Not get mandatory parameter text’) // Record not added. Request information not include mandatory parameter text
```