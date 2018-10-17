<?php require 'inc/head.php';
if (empty($_SESSION)) {
    header('Location:login.php');
}
?>
<section class="cookies container">
    <?php
    if (isset($_SESSION['cart'])) {
    ?>
    <div class="row">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Cookie</th>
                <th scope="col">Nombre</th>
            </tr>
            </thead>
            <?php
            $cart = $_SESSION['cart'];
            ?>
            <tbody>
            <?php
            foreach ($cart as $id => $value) {
                ?>
                <tr>
                    <th scope="row"><?= $value['name'] ?></th>
                    <td><?= $value['nbProduct'] ?></td>
                </tr>

            <?php }
            } else { ?>
                <a href="/index.php" class="btn btn-warning">Ajoutez des cookies à votre panier</a>
            <?php }
            ?>
            </tbody>
        </table>
    </div>


</section>
<?php require 'inc/foot.php'; ?>
