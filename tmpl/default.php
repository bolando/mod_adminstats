<?php 
// No direct access
defined('_JEXEC') or die; 
?>
 <table class="table table-hover table-condensed">
    <!-- <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead> -->
    <tbody>
      <tr>
        <td>Liczba artykułów: </td>
        <td><?php echo $artykuly->a;?></td>
      </tr>
	  <tr>
        <td>Liczba kategorii aktywnych: </td>
        <td><?php echo $artykuly->b;?></td>
      </tr>
	  <tr>
        <td>Liczba pozycji menu FrontEnd: </td>
        <td><?php echo $menu[0]->a;?></td>
      </tr>
	  <tr>
        <td>Liczba kategorii aktywnych: </td>
        <td><?php echo $menu[0]->b;?></td>
      </tr>
	  <tr>
        <td>Liczba użytkowników: </td>
        <td><?php echo $users;?></td>
      </tr>
	  <tr>
        <td>Posiada BetterPreview? </td>
        <td><?php echo $betterpreview;?></td>
      </tr>
	  <tr>
        <td>Posiada ImageSizer? </td>
        <td><?php echo $imagesizer;?></td>
      </tr>
	  <tr>
        <td>Posiada JCHOptimize? </td>
        <td><?php echo $jchoptimize;?></td>
      </tr>
	  <tr>
        <td>Wynik RSFirewall: </td>
        <td><?php echo "$grade z $last";?></td>
      </tr>
	  <tr>
        <td>Wersja PHP: </td>
        <td><?php echo phpversion();?></td>
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