Task 1:
When the user enters an email and submits the form, it sends a POST request to /emails. The server validates the input, then checks for duplicates and the 5-email limit. If everything passes, the email is pushed into the session array and the page reloads. The view then reads from the session and displays all saved emails dynamically.


Reflection Questions:

1. What is the difference between GET and POST?
GET retrieves and displays data through the URL. POST submits data hidden in the request body. GET loads the page, POST handles the form submission.

2. Why do we use @csrf in forms?
It generates a security token to protect against malicious form submissions. Without it, Laravel rejects the request with a 419 error.

3. What is session used for in this activity?
It temporarily stores the email list between page loads since HTTP forgets data after every request.

4. What happens if session is cleared?
All saved emails are permanently lost and the list resets to empty.