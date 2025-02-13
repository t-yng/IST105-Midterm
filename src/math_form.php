<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Midterm | IST105</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
      }

      h1 {
        text-align: center;
      }

      .form-group {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        left: -16px;
        margin-bottom: 15px;
      }

      label {
        margin-right: 6px;
      }

      input[type="number"] {
        width: 140px;
        padding: 5px;
      }

      button {
        display: block;
        margin: 0 auto;
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      button:hover {
          background-color: #0056b3;
      }
    </style>
  </head>
  <body>
    <h1>Welcome to the Mathematical Application!</h1>
    <p>This application is hosted on my EC2 instance with Public IP: 18.212.159.224</p>
    <p>Please Enter two numbers and select an operation to calculate the result.
    <form action="/process_math.php" method="POST">
      <div class="form-group">
        <label for="number1">Number 1: </label>
        <input type="number" id="number1" name="number1" />
      </div>
      <div class="form-group">
        <label for="number2">Number 2: </label>
        <input type="number" id="number2" name="number2" />
      </div>
      <div class="form-group">
        <label for="operation">Operation: </label>
        <select id="operation" name="operation">
          <option value="Addition">Addition</option>
          <option value="Subtraction">Subtraction</option>
          <option value="Multiplication">Multiplication</option>
          <option value="Division">Division</option>
        </select>
      </div>
      <button>Calculate</button>
    </form>
  </body>
</html>
