<?php 
// No direct access
defined('_JEXEC') or die; 
?>
 <table class="table table-hover table-condensed">
      <tr>
        <td>Liczba artykułów: </td>
        <td><span class="badge badge-info hasTooltip" title="" data-original-title="Liczba artykułów"><?php echo $artykuly->a;?></span></td>
      </tr>
	  <tr>
        <td>Liczba kategorii aktywnych: </td>
        <td><span class="badge badge-info hasTooltip" title="" data-original-title="Liczba kategorii aktywnych"><?php echo $artykuly->b;?></span></td>
      </tr>
	  <tr>
        <td>Liczba pozycji menu FrontEnd: </td>
        <td><span class="badge badge-info hasTooltip" title="" data-original-title="Liczba pozycji menu FrontEnd"><?php echo $menu[0]->a;?></span></td>
      </tr>
	  <tr>
        <td>Liczba kategorii aktywnych: </td>
        <td><span class="badge badge-info hasTooltip" title="" data-original-title="Liczba kategorii aktywnych"><?php echo $menu[0]->b;?></span></td>
      </tr>
	  <tr>
        <td>Liczba użytkowników: </td>
        <td><span class="badge badge-info hasTooltip" title="" data-original-title="Liczba użytkowników"><?php echo $users;?></span></td>
      </tr>
	  <tr>
        <td>Posiada BetterPreview? </td>
        <td><span class="badge badge-info hasTooltip" title="" data-original-title="Posiada BetterPreview"><?php echo $betterpreview;?></span></td>
      </tr>
	  <tr>
        <td>Posiada ImageSizer? </td>
        <td><span class="badge badge-info hasTooltip" title="" data-original-title="Posiada ImageSizer"><?php echo $imagesizer;?></span></td>
      </tr>
	  <tr>
        <td>Posiada JCHOptimize? </td>
        <td><span class="badge badge-info hasTooltip" title="" data-original-title="JCHOptimize?"><?php echo $jchoptimize;?></span></td>
      </tr>
	  <?php if (class_exists('RSFirewallConfig')):?>
	  <tr>
        <td>Wynik RSFirewall: </td>
        <td><span class="badge badge-info hasTooltip" title="" data-original-title="RSFirewall"><?php echo "$grade z $last";?></span></td>
      </tr>
	  <?php endif;?>
	  <tr>
        <td>Wersja PHP: </td>
        <td><span class="badge badge-info hasTooltip" title="" data-original-title="Wersja PHP"><?php echo phpversion();?></span></td>
      </tr><tr>
        <td>Notatka: </td>
        <td><?php echo $notatka;?></td>
      </tr>
    </tbody>
  </table>

<?php echo "<h3>Największe tabele</h3>";
echo "<table class='table  table-hover table-condensed'>";
foreach ($tabele as $wartosc) {
	echo "<tr><td>";
	echo $wartosc->tabela;
	echo "</td><td>";
	echo $wartosc->rozmiar;
	echo " MB</td></tr>";
	}
echo "</table>";
?>