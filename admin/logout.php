<!--
This file is part of Duolex.

Duolex is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Duolex is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Duolex.  If not, see <http://www.gnu.org/licenses/>.
-->

<?php

/**
 * Destroys ALL existing sessions.
 * @param String $name page to redirect to
 */
function destroySession($redirect) {
	session_start();
	if (session_destroy()) {
		unset($_SESSION);
		if(isset($redirect)) {
			header("Location: ".$redirect);
		}
	}
}
?>