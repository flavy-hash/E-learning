<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Notes Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .search-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }

        .search-container h2 {
            margin-bottom: 20px;
            color: #333333;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #666666;
            font-weight: bold;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .search-btn {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .search-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="search-container">
        <h2>Search Video Notes</h2>
        <form action="/search" method="GET">

            <div class="form-group">
                <label for="query">Search Topic or Topic Keywords</label>
                <input type="text" id="query" name="query" placeholder="e.g., SQL Injection, Data Structures..." required>
            </div>

            <div class="form-group">
                <label for="category">Select Discipline</label>
                <select id="category" name="category" required>
                    <option value="" disabled selected>-- Select a Category --</option>
                    <option value="computer_science">Computer Science</option>
                    <option value="cyber_security">Cyber Security</option>
                    <option value="information_technology">Information Technology (IT)</option>
                </select>
            </div>

            <input type="hidden" name="format" value="video_notes">

            <button type="submit" class="search-btn">Search Videos</button>

        </form>
    </div>

</body>
</html>
