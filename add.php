<?php
include 'db.php';
$message = "";

// If the form was submitted, save to database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['owner_name'];
    $category = $_POST['category'];
    $price = $_POST['daily_price'];
    $village = $_POST['village_location'];

    $sql = "INSERT INTO equipment (owner_name, category, daily_price, village_location) 
            VALUES ('$name', '$category', '$price', '$village')";

    if ($conn->query($sql) === TRUE) {
        $message = "Equipment listed successfully! <a href='index.php' class='underline font-bold'>Go to Homepage</a>";
    } else {
        $message = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Equipment - Farmfleet</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#F5F5F0] font-sans p-6">

    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md mt-10">
        <h2 class="text-2xl font-bold text-[#2E7D32] mb-4">Rent Out Your Equipment</h2>
        
        <?php if($message != ""): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <form action="add.php" method="POST" class="flex flex-col gap-4">
            <div>
                <label class="block text-sm font-semibold text-gray-700">Your Name</label>
                <input type="text" name="owner_name" class="w-full border p-2 rounded mt-1" required>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700">Equipment Type</label>
                <select name="category" class="w-full border p-2 rounded mt-1">
                    <option value="Tractor">Tractor</option>
                    <option value="Harvester">Harvester</option>
                    <option value="Water Pump">Water Pump</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700">Daily Price (₹)</label>
                <input type="number" name="daily_price" class="w-full border p-2 rounded mt-1" required>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700">Village/Location</label>
                <input type="text" name="village_location" class="w-full border p-2 rounded mt-1" required>
            </div>

            <button type="submit" class="bg-[#FF6D00] text-white font-bold py-3 rounded-lg mt-2 hover:bg-orange-600">
                List Equipment
            </button>
        </form>
    </div>

</body>
</html>