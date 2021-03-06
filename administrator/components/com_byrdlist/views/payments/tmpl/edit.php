<?php
/**
 * Joomla! 1.5 component reservation
 *
 * @version $Id: reservation.php 2010-06-02 12:34:25 svn $
 * @author 
 * @package Joomla
 * @subpackage reservation
 * @license Copyright (c) 2010 - All Rights Reserved
 *
 * 
 *
 *
 */

// no direct access
defined('_JEXEC') or die('Restricted access'); 

//Title and Toolbar
JToolBarHelper::title('Payments :: Add/Edit', 'generic.png'); 
$this->element('toolbar_edit'); 

JRequest::setVar( 'hidemainmenu', 1 );


?>

	<form action="index.php" method="post" name="adminForm"> 
 
		<div class="col width-60"> 
			<fieldset class="adminform"> 
				<legend>Details</legend> 
 
				<table class="admintable"> 
					<tr> 
						<td class="key"> 
							<label for="alias"> 
								Amount:
							</label> 
						</td> 
						<td colspan="2"> 
							<input class="text_area" type="text" name="amount" id="amount" 
							value="<?php echo $this->_record->amount(); ?>" 
							size="50" maxlength="255" title="" /> 
						</td> 
					</tr> 
					<tr> 
						<td class="key"> 
							<label for="title" width="100"> 
								Gateway:
							</label> 
						</td> 
						<td colspan="2"> 
							<?php $this->element('dropdown_gateways'); ?> 
						</td> 
					</tr> 
					<tr> 
						<td class="key"> 
							<label for="alias"> 
								Reference Number:
							</label> 
						</td> 
						<td colspan="2"> 
							<input class="text_area" type="text" name="reference_no" id="reference_no" 
							value="<?php echo $this->_record->reference_no(); ?>" 
							size="50" maxlength="255" title="" /> 
						</td> 
					</tr> 
					<tr> 
						<td width="120" class="key"> 
							Published:
						</td> 
						<td> 
							<input type="radio" name="published" id="published0" value="0" class="inputbox" 
							<?php echo (!$this->_record->published())? 'checked="checked"':""; ?> /> 
							<label for="published0">No</label> 
							
							<input type="radio" name="published" id="published1" value="1" class="inputbox"
							<?php echo ($this->_record->published())? 'checked="checked"':""; ?> /> 
							<label for="published1">Yes</label> 
						</td>
					</tr>
					<tr> 
						<td class="key"> 
							Listing:
						</td> 
						<td>
							<?php $this->element('select_listings'); ?>
						</td> 
					</tr>
				</table> 
			</fieldset> 
			
		</div> 
		<div class="clr"></div> 
 		
		<input type="hidden" name="option" value="<?php echo EBOOK_COMPONENT; ?>" />
		<input type="hidden" name="view" value="payments" />
		<input type="hidden" name="layout" value="edit" />
		<input type="hidden" name="oldtitle" value="<?php echo $this->_record->name(); ?>" /> 
		<input type="hidden" name="id" value="<?php echo $this->_record->id(); ?>" /> 
		<input type="hidden" name="record" value="<?php echo $this->_record->id(); ?>" /> 
		<input type="hidden" name="task" value="" /> 
		<input type="hidden" name="redirect" value="<?php echo EBOOK_COMPONENT; ?>" /> 
		<input type="hidden" name="268c00c407c7e10d7a5164d447cd9018" value="1" />
	</form>