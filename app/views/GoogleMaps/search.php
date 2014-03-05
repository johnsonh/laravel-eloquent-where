<?php
/**
 * Created by PhpStorm.
 * User: Johnson
 * Date: 3/4/14
 * Time: 1:03 AM
 */

echo '<h2> Welcome to the GoogleMaps page! Search for an address? </h2>';

echo '<form action="/maps" method="post">';

echo '<p>Address: <input type="text" name ="address"></p>';

echo '
<input type="submit" value="Search">
</form>
';