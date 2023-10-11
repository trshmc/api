TRISHA MAE C. CERVANIA 4-A

# JSON POST with Database Integration

The JSON POST API endpoint facilitates the transmission of structured data from clients to a server, enabling the creation or modification of records. The request body facilitates the transmission of JSON data, rendering it versatile and conducive to seamless manipulation. After the completion of processing, the server provides an HTTP status code along with the required JSON data. This technology has the capability to facilitate user registration, data updates, and customized processes while ensuring secure authentication. It is essential to consult appropriate documentation to ascertain the necessary specifications for endpoints and the protocols for managing errors.

## API Description

The utilization of an Application Programming Interface (API) facilitates the optimization of operational processes by providing efficient data management, instantaneous communication, and reliable interaction with external services. By incorporating powerful authentication mechanisms, a scalable architecture, and comprehensive documentation, developers are empowered to design and deploy varied and efficient applications. The utilization of API results in improved functionality and increased user engagement.

## Purpose:

The Application Programming Interface (API) is designed with the purpose of streamlining intricate procedures and augmenting the capabilities of your software applications. Our API provides a comprehensive range of capabilities to enhance operational efficiency, optimize user experience, and enhance productivity across many software platforms, including website and mobile app development.

## Key Features:

Data Management:

- Easily store, retrieve, and manage data using our API. It supports various data types and formats, ensuring compatibility with different systems.
- Secure data transmission and storage protocols to safeguard sensitive information.

Authentication and Authorization:

- Implement secure user authentication and authorization mechanisms to protect your API endpoints.
-Fine-grained access control to restrict user actions based on roles and permissions.

Real-time Communication:

- Enable real-time communication between users with features like instant messaging, notifications, and live updates.
- WebSockets and other protocols for efficient real-time data exchange.

Integration with Third-party Services:

- Seamlessly integrate with popular third-party services, allowing you to leverage external functionalities without leaving your application.
- Social media, payment gateways, mapping services, and more.

Analytics and Reporting:

- Generate detailed analytics and reports to gain valuable insights into user behavior, system performance, and other crucial metrics.
- Customizable reporting tools to visualize data according to your specific requirements.

Scalability and Reliability:

- Highly scalable architecture to accommodate growing user demands without compromising performance.
-Redundancy and failover mechanisms to ensure uninterrupted service even in case of server failures.

Documentation and Support:

- Comprehensive API documentation with detailed endpoints, request methods, and response formats.
-Dedicated customer support to assist you in API integration, issue resolution, and updates.

Security:

- Implement industry-standard security protocols such as HTTPS, OAuth, and API keys.
- Regular security audits and updates to protect against emerging threats.

Customization:

- Customize API endpoints and functionalities according to your specific use case and business requirements.
- Flexible configuration options to adapt the API to your application's unique needs.

Error Handling:

- Clear and concise error messages to facilitate easy debugging and troubleshooting.
- Predictive error handling to preemptively address potential issues.

## API Endpoints

Explain the accessible endpoints, their roles, and the necessary inputs.

http://127.0.0.1/api/public/postName

Purpose: This endpoint is designed to add new information to the database.
Required Parameters: First name (fname), Last name (lname).

http://127.0.0.1/api/public/postUpdate

Purpose: This endpoint is utilized for modifying existing data in the database.
Required Parameters: ID, First name (fname), Last name (lname).

http://127.0.0.1/api/public/postPrint

Purpose: This endpoint serves the function of displaying the data stored in the database.
Required Parameters: None.

http://127.0.0.1/api/public/postDelete

Purpose: This endpoint is responsible for removing specific data from the database.
Required Parameters: ID.



## Request Payload

## JSON Payload postName:

- Request payload:
{
  "lname":"hortizuela",
   "fname":"manny"
}

This payload is used for creating a new name entry. It requires both the last name ("lname") and first name ("fname") of the person being added.

## JSON Payload printName:
 
- Request payload:

This payload does not contain any specific fields. It might be used for retrieving or printing a name from the system, but the payload itself does not specify any required or optional fields.

## JSON Payload updateName:

- Request payload:
{
  "id":1,
  "lname":"wick",
   "fname":"john"
}

This payload is used for updating an existing name entry identified by the specified "id". It requires the updated last name ("lname") and first name ("fname") of the person.

## JSON Payload deleteName:

- Request payload:
{
  "id":1
}

This payload is used for deleting a name entry based on the specified "id". It only requires the unique identifier of the name entry to be deleted.

## Response

## JSON Payload postName:

- Response payload:
{
         "status":"success","data":null
}

"status": Indicates the status of the API request. In this case, it's "success" indicating that the request was successful.
"data": This field is present but set to null, indicating that no specific data is returned for successful postName requests.

## JSON Payload printName:

- Response payload:
{
         "status":"success","data":["lname":"hortizuela","fname":"manny","lname":"licayan","fname":"arnold"]
}

"status": Indicates the status of the API request. It's "success" indicating that the request was successful.
"data": An array containing objects, each representing a name entry. Each object contains "lname" (last name) and "fname" (first name) fields with corresponding values. The response includes multiple name entries.


## JSON Payload updateName:

- Response payload:
{
         "status":"success","data":null
}

"status": Indicates the status of the API request. It's "success" indicating that the request was successful.
"data": This field is present but set to null, indicating that no specific data is returned for successful updateName requests.


## JSON Payload deleteName:

- Response payload:
{
         "status":"success","data":null
}

"status": Indicates the status of the API request. It's "success" indicating that the request was successful.
"data": This field is present but set to null, indicating that no specific data is returned for successful deleteName requests.



## Usage

Follow these steps to manipulate database information using Postman and the API endpoints:

1. Launch Postman:
Ensure that Postman is installed and operational on your system.

2. Send a POST Request to Insert Data:
To insert data into the database via the /api/public/postName endpoint:

Choose the HTTP method as POST.
Input the URL: http://127.0.0.1/api/public/postName.
Within the request body, specify the parameters fname and lname along with the desired values for insertion.
Click "Send" to dispatch the request.

3. Send a POST Request to Update Data:
To update existing database entries using the /api/public/updateName endpoint:

Select the HTTP method as POST.
Enter the URL: http://127.0.0.1/api/public/updateName.
In the request body, include the parameters id, fname, and lname, along with the updated values.
Click "Send" to submit the request.

4. Send a POST Request to Print Data:
To showcase database data using the /api/public/printName endpoint:

Opt for the HTTP method as POST.
Specify the URL: http://127.0.0.1/api/public/printName.
Keep the request body empty as no additional parameters are required.
Click "Send" to transmit the request.

5. Send a POST Request to Delete Data:
To remove data from the database through the /api/public/deleteName endpoint:

Set the HTTP method to POST.
Enter the URL: http://127.0.0.1/api/public/deleteName.
In the request body, include the parameter id with the ID of the data you intend to delete.

Click "Send" to initiate the request.

 

## License

No License 


## Contributors

Sir Manny Hortizuela
provided:

- some codes
- database structure
- payloads
- etc.


## Contact
Include contact
information for inquiries or support.

Trisha Mae C. Cervania 
- trishamae.cervania@student.dmmmsu.edu.ph
- 09482086374

