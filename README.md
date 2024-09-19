1. Write a PHP Script to print “Hello World”
   
3. Write a PHP Script to showcase the use of newline
   
5. Write a PHP Script to check whether the number is an integer or not. If it is an integer, print if it is +ve, -ve or 0.
   
7. Write a PHP script to calculate the percentage of students in 5 subjects.
   
9. Write a PHP Script to calculate the area of rectangle, square, rectangle and circle
    
11. Create a script that performs a series of arithmetic operations based on user input, including exponentiation and modulo operations. Then, manipulate these operations using different precedence levels and parentheses.
    
13. Write a php script and make use of the null coalescing operator (??) in a chained manner to find the first non-null value among multiple variables.
    
15. Write a PHP Script to take a year as an input and check whether it is leap year or not
    
17. Write a PHP Script that uses a nested ternary operator to check multiple conditions. It first checks if the income is above a certain threshold and then checks the credit score to determine the type of loan for which the user is eligible.
    
19. Write a PHP Script that checks the user's age, whether they have a driving license, and their driving experience to determine eligibility for car insurance.
    
21. Write a recursive function to calculate the factorial of a number. If the number is negative, return a custom error message using an if-else condition.
    
23. Simulate a simple game loop where the player rolls a die. The game ends if the player rolls a 6. If they roll an odd number, they gain points, and the loop continues until a 6 is rolled.
    
25. Design the PHP Script for PHP Password Validation Check for Strength
    
27. Write a PHP as function that determines the type of triangle (equilateral, isosceles, or scalene) based on the lengths of its three sides. Use conditional statements to perform the checks.
    
29. Write a PHP script using a for loop to add all the integers between 0 and 20 and display the sum
    
31. Write a PHP script that generates the first 20 numbers of the Fibonacci sequence using a loop
    
33. Write a PHP script to calculate the sum of the digits of a given number using a loop.
    
35. Write a PHP Script to reverse the array with and without using functions.
36.
Given Array $ages = [23, 45, 29, 34, 50, 19, 67, 45, 23, 34];
Requirements 1. Find the unique ages in the array and print them.
2. Sort the unique ages in ascending order.
3. Print the largest and smallest from the sorted array.

20.Given the Products and their prices in an associative array Sorting an Associative Array by Value i.e by prices
$products = [ "Laptop" => 1200, "Tablet" => 600, "Smartphone" => 900, "Desktop" => 1500 ];


21. Write a PHP Script to combine two arrays and print the common elements from the following Indexed Arrays
$array1 = [1, 3, 5, 7, 9];
$array2 = [3, 7, 11, 15];

22. Write a php script to remove the first and last element from an Indexed array. Take array as $numbers = [10, 20, 30, 40, 50];
23. Write a PHP script to print only even numbers from a given associative array.

24. Create a PHP script that manages student grades using a multidimensional array. In this task, we'll store students' names and their grades for different subjects. We will then calculate the average grade for each student.

25. Write a PHP Script to take a string from the user and calculate the total number of vowels in a string.

26. Use an associative array to store inventory items with their quantities and prices. - E.g., ['item' => ['quantity' => 10, 'price' => 50]]
1. Add New Item:
- Prompt the user to add a new item to the inventory.
2. Update Item Quantity:
- Prompt the user to update the quantity of an existing item.
3. Remove Item:
- Prompt the user to remove an item from the inventory.
4. Calculate Total Value:
- Calculate and display the total value of the inventory (quantity * price).
- if-else, switch, foreach, while for managing inventory and user choices.
- Print the updated inventory after each operation.
- Print the total value of the inventory.
27.
Create a PHP program that assigns shifts to employees, tracks their work hours, and ensures no overlap in shifts.
- Use arrays to store employee names, shifts (morning, afternoon, night), and work hours. - Use variables to manage scheduling logic and conflict resolution.
  
1. Assign Shift:
- Assign a shift to an employee (morning, afternoon, night).
  
2. Check Shift Conflict:
- Ensure no two employees have overlapping shifts.
  
3. Track Work Hours:
- Calculate and display the total work hours for each employee based on their shifts.
  
4. Generate Shift Report:
- Generate a report listing all employees, their assigned shifts, and total work hours.
Hint- Use if-else, switch, foreach, while for handling shift assignments, conflict checks, and report generation

28. Create a function that behaves differently based on the number of arguments passed, simulating function overloading.
  
29. Pass a callback to PHP's array_map() function to calculate the length of every string in an array
  
30. Create a function that accepts a variable number of arguments using the ... operator (variadic functions).
    
32. Create a function with default arguments to demonstrate how default values work when parameters are omitted.

33. Demonstrate named arguments, allowing arguments to be passed by their names rather than by position.
    
34. Create a function that returns multiple values using an array.
    
36. Create a function to calculate the factorial of a number with additional complexity like error handling, using a closure to perform an additional operation on the result, and a callback function to display the result.

37. Create two PHP files:
• header.php which contains an HTML header (<h1>Welcome to My Website</h1>).
• footer.php which contains an HTML footer (<footer>© 2024 My Website</footer>).
Create a third PHP file, index.php, that includes header.php and footer.php using both include() and require(). If footer.php is missing, observe and explain the difference in behavior between include and require.

38. Create a PHP script that includes two separate files (config.php and functions.php) multiple times. Use include_once and require_once to ensure that the files are included only once, even if you mistakenly try to include them multiple times. Test the difference between include_once and require_once.
39. Create a PHP script that includes different files dynamically based on the user's selection. For example, if the user selects "About", the script should include about.php; if they select "Contact", it should include contact.php. Use the $_GET superglobal to achieve this and handle the case where the file doesn’t exist.







40. Modular Website Design with Include/Require
Question:
Design a modular PHP website using include() and require() for the header, navigation, footer, and content sections. Create a main template file (template.php) and include the following components:
• header.php: Contains the HTML header and page title.
• nav.php: Contains the navigation menu.
• footer.php: Contains the footer.
• content.php: Contains the page-specific content.
Ensure that if any component is missing, the page still displays with appropriate error handling.

41. Handling Server Variables with $_SERVER
Write a PHP script that displays various information about the server and the client using the $_SERVER superglobal. Specifically, display the following:
• The client's IP address.
• The name and version of the web server software.
• The request method used to access the page (GET or POST).
• The script name and path.
• Bonus: Display the full URL of the current page including query parameters, using $_SERVER.
42. File Upload Handling with $_FILES
Create a PHP script that allows users to upload files to the server. Use the $_FILES superglobal to handle file uploads. Validate the file type and size (e.g., allow only images of up to 2MB). Display appropriate error messages if the validation fails and show the file name and path if the upload is successful.
• Bonus: Store the uploaded file information in a session ($_SESSION) and allow the user to view their uploaded files on another page.
43. Global Variables Access and Modification
Write a PHP script with several functions that manipulate a global variable. The script should define a global variable $counter and three functions: incrementCounter(), decrementCounter(), and resetCounter(). Use the global keyword to access and modify the $counter variable within these functions. Display the updated value of the counter after each function call.
• Bonus: Refactor the script using the $GLOBALS array instead of the global keyword.

44. Environment Variables with $_ENV
Write a script that uses the $_ENV superglobal to retrieve the system’s environment variables, such as the operating system, the user running the script, and the system’s hostname. Display these environment variables in a structured table format on a webpage.
• Bonus: Set a custom environment variable using putenv() and display its value using $_ENV.
These questions encourage students to not only understand the use of PHP superglobals but also how they interact with each other across different pages and scenarios.

45. Cross-Page Data Sharing Using $_COOKIE
Create two PHP pages. On the first page, set a cookie with the user's preferred language (e.g., English or French). On the second page, read the cookie and display a greeting message based on the user's selected language. Make sure the cookie lasts for at least 7 days.
• Bonus: Add functionality to update the preferred language cookie when the user changes their preference.
46. Session Management and Tracking
Simple Login System
Objective: Create a basic login system using sessions to manage user authentication.

Tasks:
Create a login form with fields for username and password.
When a user submits the form, check the credentials against a predefined username and password stored in the PHP file.
If the credentials are correct, store the username in the session and redirect the user to a welcome page.
On the welcome page, display the username using session data and provide a logout button.
When the user clicks "Logout," destroy the session and redirect the user back to the login page.
Key Concepts:
• Storing user data in a session.
• Session persistence across different pages.
• Destroying sessions to log out. in PHP
45. Form Handling with Superglobals
Write a PHP script that processes a form with three fields: name, age, and email. The form should send data using both GET and POST methods. Use both $_GET and $_POST superglobals in the same script to handle and validate the form data. Make sure to display an error message if any of the fields are empty or invalid, and show the submitted data otherwise.
