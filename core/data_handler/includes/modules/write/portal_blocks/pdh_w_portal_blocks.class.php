<?php
/*	Project:	EQdkp-Plus
 *	Package:	EQdkp-plus
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2016 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if(!defined('EQDKP_INC')) {
	die('Do not access this file directly.');
}

if(!class_exists('pdh_w_portal_blocks')) {
	class pdh_w_portal_blocks extends pdh_w_generic {

		public function delete($id) {
			$objQuery = $this->db->prepare("DELETE FROM __portal_blocks WHERE id=?" )->execute($id);
			$this->pdh->enqueue_hook('portal_blocks_update');
		}

		public function add($strName, $intWideContent){
			$objQuery = $this->db->prepare("INSERT INTO __portal_blocks :p")->set(array(
				'name' 			=> $strName,
				'wide_content'	=> $intWideContent,
			))->execute();

			if($objQuery){
				$this->pdh->enqueue_hook('portal_blocks_update');
				return $objQuery->insertId;
			}

			return false;
		}

		public function update($id, $strName, $intWideContent){
			$objQuery = $this->db->prepare("UPDATE __portal_blocks :p WHERE id=?")->set(array(
				'name' 			=> $strName,
				'wide_content'	=> $intWideContent,
			))->execute($id);

			if ($objQuery){
				$this->pdh->enqueue_hook('portal_blocks_update');
				return $id;
			}

			return false;
		}


	}
}
