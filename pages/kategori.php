<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaCode New's</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body >

    <!-- header start -->
    <?php include('../include/header.php') ?>
    <!-- header end -->

    <?php $kategori = $_GET['page'] ?>
    <!-- nav start --> 
    <?php include('../include/nav.php') ?>
    <!-- nav end -->

    <!-- Main content start -->
    <section class="border py-4 border-gray-800 container mx-auto p-6 bg-slate-200">
    <h1 class="font-mono text-4xl" >Kategori <?= $kategori?> </h1>
    <!-- Main content end -->

    <!-- footer start -->
    <?php include('../include/footer.php') ?>
    <!-- footer end -->

</body>
</html>