<?php
include 'db.php';

if (isset($_GET['blog_id']) && is_numeric($_GET['blog_id'])) {
    $blog_id = $_GET['blog_id'];

    $stmt = $conn->prepare("SELECT * FROM poly_blog WHERE blog_id = ?");
    $stmt->bind_param("i", $blog_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $blog = $result->fetch_assoc();
} else {
    die("Invalid Blog ID");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($blog['blog_title'] ?? 'Blog Detail') ?></title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>

<body>
    <!-- Header -->
    <?php include("header.php") ?>

    <!-- Blog Content -->
    <section class="section-padding aboutus-wrapper">
        <div class="container">
            <div class="row">
                <?php if ($blog): ?>
                    <div class="col-lg-12 mb-4">
                        <img src="<?= htmlspecialchars($blog['image']) ?>" alt="blog-image" class="img-fluid rounded wow animate__animated animate__fadeInDown" style="border-radius:20px!important;"/>
                    </div>
                    <div class="col-lg-12 text-center">
                        <h2 class="gradient-text letter-spacing mt-2 wow animate__animated animate__fadeInDown">
                            <?= htmlspecialchars($blog['blog_title']) ?>
                        </h2>
                    </div>
                    <div class="col-lg-12">
                        <h4 class="fw-bold mt-3 wow animate__animated animate__fadeInDown">
                            <?= htmlspecialchars($blog['meta_title']) ?>
                        </h4>
                      <p class="mt-3 wow animate__animated animate__fadeInDown">
                          <?= $blog['content_descripation'] ?>
                      </p>
                    </div>
                <?php else: ?>
                    <div class="col-12">
                        <p>No blog found with the given ID.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include("footer.php") ?>

    <!-- Cursor and Scripts -->
    <div class="custom-cursor"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script> new WOW().init(); </script>
</body>

</html>
