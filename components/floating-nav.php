<?php
// L'ordre ici = l'ordre de navigation entre case studies
$projects = [
  'Riseup.php',
  'Mavoie.php',
  'Soliguide.php',
  'Catan.php',
];

$current = basename($_SERVER['SCRIPT_NAME']);
$i       = array_search($current, $projects);

$prev = ($i !== false && $i > 0) ? $projects[$i - 1] : null;
$next = ($i !== false && $i < count($projects) - 1) ? $projects[$i + 1] : null;
?>
<nav id="floating-nav">
  <div class="nav-wrapper">
    <div class="nav-content">

      <?php if ($prev): ?>
        <a href="<?= $prev ?>" class="nav-link nav-project" id="link-prev">
          <i class="bi bi-arrow-left"></i>
          <span>Précédent</span>
        </a>
      <?php endif; ?>

      <a href="index.php" class="nav-link nav-home" id="link1" aria-label="Accueil">
        <i class="bi bi-house"></i>
      </a>

      <?php if ($next): ?>
        <a href="<?= $next ?>" class="nav-link nav-project" id="link-next">
          <span>Suivant</span>
          <i class="bi bi-arrow-right"></i>
        </a>
      <?php endif; ?>

    </div>
  </div>
</nav>