var form = new FormData();
var settings = {
  "url": "http://167.71.194.195:8000/api/shift/",
  "method": "GET",
  "timeout": 0,
  "headers": {
    "Authorization": "Token 58c0f05f78c719f67f8bdc14c427842675d3f97e"
  },
  "processData": false,
  "mimeType": "multipart/form-data",
  "contentType": false,
  "data": form
};

$.ajax(settings).done(function (response) {
  console.log(response);
});