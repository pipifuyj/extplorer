<?php
// ensure this file is being included by a parent file
if( !defined( '_JEXEC' ) && !defined( '_VALID_MOS' ) ) die( 'Restricted access' );
/**
 * @version $Id: login.php 149 2009-06-21 18:44:27Z soeren $
 * @package eXtplorer
 * @copyright soeren 2007-2009
 * @author The eXtplorer project (http://sourceforge.net/projects/extplorer)
 * @author The	The QuiX project (http://quixplorer.sourceforge.net)
 * 
 * @license
 * The contents of this file are subject to the Mozilla Public License
 * Version 1.1 (the "License"); you may not use this file except in
 * compliance with the License. You may obtain a copy of the License at
 * http://www.mozilla.org/MPL/
 * 
 * Software distributed under the License is distributed on an "AS IS"
 * basis, WITHOUT WARRANTY OF ANY KIND, either express or implied. See the
 * License for the specific language governing rights and limitations
 * under the License.
 * 
 * Alternatively, the contents of this file may be used under the terms
 * of the GNU General Public License Version 2 or later (the "GPL"), in
 * which case the provisions of the GPL are applicable instead of
 * those above. If you wish to allow use of your version of this file only
 * under the terms of the GPL and not to allow others to use
 * your version of this file under the MPL, indicate your decision by
 * deleting  the provisions above and replace  them with the notice and
 * other provisions required by the GPL.  If you do not delete
 * the provisions above, a recipient may use your version of this file
 * under either the MPL or the GPL."
 * 
 * User Authentication Functions
 * (currently not used)
 */

//------------------------------------------------------------------------------
require_once _EXT_PATH."/include/users.php";
load_users();
//------------------------------------------------------------------------------

$GLOBALS['__SESSION']=&$_SESSION;

//------------------------------------------------------------------------------
function login() {

	if(!empty($GLOBALS['__SESSION']["s_user"])) {
		if(!activate_user($GLOBALS['__SESSION']["s_user"],$GLOBALS['__SESSION']["s_pass"])) {
			logout();
		}
	} else {
		if(isset($GLOBALS['__POST']["p_pass"])) $p_pass=$GLOBALS['__POST']["p_pass"];
		else $p_pass="";

		if(isset($GLOBALS['__POST']["p_user"])) {
			// Check Login
			if(!activate_user(stripslashes($GLOBALS['__POST']["p_user"]), extEncodePassword(stripslashes($p_pass)))) {
				ext_Result::sendResult('login', false, ext_Lang::msg( 'actlogin_failure' ));
			}
			ext_Result::sendResult('login', true, ext_Lang::msg( 'actlogin_success' ) );
		} else {
			session_write_close();
			session_id( get_session_id() );
			session_start();
			// Ask for Login
			$GLOBALS['mainframe']->setPageTitle( ext_Lang::msg('actlogin') );
			$GLOBALS['mainframe']->addcustomheadtag( '
		<script type="text/javascript" src="'. _EXT_URL . '/fetchscript.php?'
			.'&amp;subdir[0]=scripts/extjs3/&amp;file[0]=yui-utilities.js'
			.'&amp;subdir[1]=scripts/extjs3/&amp;file[1]=ext-yui-adapter.js'
			.'&amp;subdir[2]=scripts/extjs3/&amp;file[2]=ext-all.js&amp;gzip=1"></script>
		<script type="text/javascript" src="'. $GLOBALS['script_name'].'?option=com_extplorer&amp;action=include_javascript&amp;file=functions.js"></script>
		<link rel="stylesheet" href="'. _EXT_URL . '/fetchscript.php?subdir[0]=scripts/extjs3/css/&file[0]=ext-all.css&amp;subdir[1]=scripts/extjs3/css/&file[1]=xtheme-blue.css&amp;gzip=1" />');

			$langs = get_languages();
			?>
		<div style="width: 400px;" id="formContainer">
			<div id="ext_logo" style="text-align:center;">
			<img src="<?php echo _EXT_URL ?>/images/eXtplorer.gif" align="middle" alt="eXtplorer Logo" />
			</div>
			<div class="x-box-tl"><div class="x-box-tr"><div class="x-box-tc"></div></div></div>
			<div class="x-box-ml"><div class="x-box-mr"><div class="x-box-mc">

			<h3 style="margin-bottom:5px;"><?php echo ext_Lang::msg('actlogin') ?></h3>
			<div id="adminForm">

			</div><div class="ext_statusbar" id="statusBar"></div>
			</div></div></div>
			<div class="x-box-bl"><div class="x-box-br"><div class="x-box-bc"></div></div></div>

	</div>
	<script type="text/javascript">
	var languages = new Ext.data.SimpleStore({
		fields: ['language', 'langname'],
		data :	[
		<?php 
		$i = 0; $c = count( $langs );
		foreach( $langs as $language => $name ) {
			echo "['$language', '$name' ]";
		if( ++$i < $c ) echo ',';
		}
		?>
			]
	});
	var simple = new Ext.FormPanel({
		labelWidth: 125, // label settings here cascade unless overridden
		url:'<?php echo basename( $GLOBALS['script_name']) ?>',
		bodyStyle: {background:"transparent",border: "none"},
		keys: {
		    key: Ext.EventObject.ENTER,
		    fn  : function(){
				if (simple.getForm().isValid()) {
					submitLoginForm();
    	        } else {
        	        return false;
            	}
            }
		},
		renderTo: "adminForm",
		items: [{
            xtype:'textfield',
			fieldLabel: '<?php echo ext_Lang::msg( 'miscusername', true ) ?>',
			name: 'p_user',
			width:175,
			allowBlank:false
		},{
			xtype:'textfield',
			fieldLabel: '<?php echo ext_Lang::msg( 'miscpassword', true ) ?>',
			name: 'p_pass',
			inputType: 'password',
			width:175,
			allowBlank:false
		}, new Ext.form.ComboBox({
			
			fieldLabel: '<?php echo ext_Lang::msg( 'misclang', true ) ?>',
			store: languages,
			displayField:'langname',
			valueField: 'language',
			value: '<?php echo ext_Lang::detect_lang() ?>',
			hiddenName: 'lang',
			disableKeyFilter: true,
			editable: false,
			triggerAction: 'all',
			mode: 'local',
			allowBlank: false,
			selectOnFocus:true
		})
		],
		buttons: [{
			text: '<?php echo ext_Lang::msg( 'btnlogin', true ) ?>', 
			type: 'submit',
			handler: function() {
				Ext.get( 'statusBar').update( 'Please wait...' );
				submitLoginForm();
			}
		},{
			text: '<?php echo ext_Lang::msg( 'btnreset', true ) ?>', 
			handler: function() { simple.getForm().reset(); } 
		}
		]
	});
	
	Ext.get( 'formContainer').center();
	Ext.get( 'formContainer').setTop(100);
	simple.getForm().findField('p_user').focus();
	
function submitLoginForm() {
	form = simple.getForm();
	form.submit({
		//reset: true,
		reset: false,
		success: function(form, action) {
			Ext.get( 'statusBar').update( action.result.message );
			location.href = '<?php echo basename( $GLOBALS['script_name']) ?>?extplorer';
		},
		failure: function(form, action) {
			if( !action.result ) return;
			Ext.MessageBox.alert('Error!', action.result.error);
			Ext.get( 'statusBar').update( action.result.error );
			form.findField( 'p_pass').setValue('');
			form.findField( 'p_user').focus();
		},
		scope: form,
		// add some vars to the request, similar to hidden fields
		params: {
			option: 'com_extplorer', 
			action: 'login'
		}
	});
}
</script><?php
			define( '_LOGIN_REQUIRED', 1 );
		}
	}
}
//------------------------------------------------------------------------------
function logout() {
	session_destroy();
	session_write_close();
	header("Location: ".$GLOBALS["script_name"]);
}
//------------------------------------------------------------------------------
/**
 * Returns an IP- and BrowserID- based Session ID
 *
 * @param string $id
 * @return string
 */
function get_session_id( $id=null ) {
	return extMakePassword( 32 );
}

