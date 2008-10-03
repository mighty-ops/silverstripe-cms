<?php

/**
 * Sinhalese (Sri Lanka) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('si_LK', $lang) && is_array($lang['si_LK'])) {
	$lang['si_LK'] = array_merge($lang['en_US'], $lang['si_LK']);
} else {
	$lang['si_LK'] = $lang['en_US'];
}

$lang['si_LK']['AssetAdmin']['CHOOSEFILE'] = 'ලිපිය තෝරන්න';
$lang['si_LK']['AssetAdmin']['CONTENTMODBY'] = 'අන්ර්ගතය වෙනස් කල හැකි';
$lang['si_LK']['AssetAdmin']['CONTENTUSABLEBY'] = 'අන්ර්ගතය පාවිච්චි කල හැකි';
$lang['si_LK']['AssetAdmin']['CREATED'] = 'පලමු ලිපිය අප්ලෝඩ් කරන ලදී';
$lang['si_LK']['AssetAdmin']['DELETEDX'] = '%s ලිපි මකන ලදී. %s';
$lang['si_LK']['AssetAdmin']['DELETEUNUSEDTHUMBNAILS'] = 'පාවිච්චි නොකරන ලද තම්බ්නේල් මකන්න';
$lang['si_LK']['AssetAdmin']['DELSELECTED'] = 'තෝරා ගත් ලිපි මකන්න';
$lang['si_LK']['AssetAdmin']['DETAILSTAB'] = 'තොරතුරු';
$lang['si_LK']['AssetAdmin']['FILENAME'] = 'ලිපි නම';
$lang['si_LK']['AssetAdmin']['FILESREADY'] = 'ලිපි අප්ලෝඩ් කිරීමට සුදානම්';
$lang['si_LK']['AssetAdmin']['FILESTAB'] = 'ලිපි';
$lang['si_LK']['AssetAdmin']['LASTEDITED'] = 'අවසාන ලිපිය අප්ලෝඩ් කරන ලදී';
$lang['si_LK']['AssetAdmin']['MOVEDX'] = '%s ලිපි මාරු කරන ලදී';
$lang['si_LK']['AssetAdmin']['NEWFOLDER'] = 'අලත් ගොනුවක්';
$lang['si_LK']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'අප්ලෝඩ් කිරීමට කිසිවක් නැත';
$lang['si_LK']['AssetAdmin']['NOWBROKEN'] = 'මෙම පිටු වලට කැඩුනු බැදීම් ඇත';
$lang['si_LK']['AssetAdmin']['ONLYADMINS'] = 'මෙහෙයවන්නන්ට පමණක් ලිපි අප්ලෝඩ් කල හැක';
$lang['si_LK']['AssetAdmin']['OWNER'] = 'අයිතිකරැ';
$lang['si_LK']['AssetAdmin']['SAVEDFILE'] = 'ලිපිය සේවි කරන ලදී';
$lang['si_LK']['AssetAdmin']['SAVEFOLDERNAME'] = 'සේවි කරන ගොනු නම ';
$lang['si_LK']['AssetAdmin']['TITLE'] = 'මතකව';
$lang['si_LK']['AssetAdmin']['TOOLARGE'] = '%s විශාල වැඩියි (%s), ලිපි %s ට වඩා විශාල විය නොහැක';
$lang['si_LK']['AssetAdmin']['TYPE'] = 'වර්ගය';
$lang['si_LK']['AssetAdmin']['UNUSEDFILESTAB'] = 'පාවිච්චි නොකරන ලද ලිපි';
$lang['si_LK']['AssetAdmin']['UNUSEDFILESTITLE'] = 'පාවිච්චි නොකරන ලද ලිපි';
$lang['si_LK']['AssetAdmin']['UNUSEDTHUMBNAILSTITLE'] = 'පාවිච්චි නොකරන ලද තම්බ්නේල්';
$lang['si_LK']['AssetAdmin']['UPLOAD'] = 'පහත ලිපි අප්ලෝඩ් කරන්න';
$lang['si_LK']['AssetAdmin']['UPLOADEDX'] = '%s ලිපි අප්ලෝඩ් කරන ලදී';
$lang['si_LK']['AssetAdmin']['UPLOADTAB'] = 'අප්ලෝඩ් කරන්න';
$lang['si_LK']['AssetAdmin']['VIEWASSET'] = 'වත්කම් පෙන්වන්න';
$lang['si_LK']['AssetAdmin']['VIEWEDITASSET'] = 'වත්කම පෙන්වන්න/සංස්කරනය කරන්න';
$lang['si_LK']['AssetAdmin_left.ss']['CREATE'] = 'හදන්න';
$lang['si_LK']['AssetAdmin_left.ss']['DELETE'] = 'මකන්න';
$lang['si_LK']['AssetAdmin_left.ss']['DELFOLDERS'] = 'තෝරාගත් ගොනු මකන්න';
$lang['si_LK']['AssetAdmin_left.ss']['FOLDERS'] = 'ගොනු';
$lang['si_LK']['AssetAdmin_left.ss']['GO'] = 'යන්න';
$lang['si_LK']['AssetAdmin_left.ss']['SELECTTODEL'] = 'මකන්න අවශය ගොනු තෝරා බොත්තම ඹබන්න';
$lang['si_LK']['AssetAdmin_left.ss']['TOREORG'] = 'ඹබගේ ගොනු නැවත සැකසීමට, ඵ්වා අවශය පරිදි අදින්න';
$lang['si_LK']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'වමෙන් පිටුවක් තෝරන්න';
$lang['si_LK']['AssetAdmin_right.ss']['WELCOME'] = 'ආයුබෝවන්';
$lang['si_LK']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'මෙම ගොනුවට ලිපි අපාලෝඩ් කිරීමට ඔබට අවසර නැත';
$lang['si_LK']['AssetTableField']['CREATED'] = 'පලමු ලිපිය අප්ලෝඩ් කරන ලදී';
$lang['si_LK']['AssetTableField']['DIM'] = 'මාන';
$lang['si_LK']['AssetTableField']['FILENAME'] = 'ලිපි නම';
$lang['si_LK']['AssetTableField']['LASTEDIT'] = 'අවසාන ලිපිය වෙනස්  කරන ලදී';
$lang['si_LK']['AssetTableField']['NOLINKS'] = 'මෙම ලිපිය හා කිසිත් නොබැදේ';
$lang['si_LK']['AssetTableField']['OWNER'] = 'හිමි කරැ';
$lang['si_LK']['AssetTableField']['PAGESLINKING'] = 'පහත පිටු මෙම ලිපිය හා බැදේ';
$lang['si_LK']['AssetTableField']['SIZE'] = 'තරම';
$lang['si_LK']['AssetTableField.ss']['DELFILE'] = 'මෙම ලිපිය මකන්න';
$lang['si_LK']['AssetTableField.ss']['DRAGTOFOLDER'] = 'ලිපිය චලනය කිරීමට වම් පැත්තේ ඇති ගොනුවක් මතට අදින්න';
$lang['si_LK']['AssetTableField']['TITLE'] = 'මතකව';
$lang['si_LK']['AssetTableField']['TYPE'] = 'වර්ගය';
$lang['si_LK']['BulkLoaderAdmin']['CONFIRMBULK'] = 'මෙම ගොඩ අනුමත කරන්න';
$lang['si_LK']['BulkLoaderAdmin']['CSVFILE'] = 'CSV ලිපි';
$lang['si_LK']['BulkLoaderAdmin']['DATALOADED'] = 'මෙම දත්ත ලෝඩ් කර ඇත';
$lang['si_LK']['BulkLoaderAdmin']['PRESSCNT'] = 'දත්ත ලබාගැනීමට කිරීමට continue  ඔබන්න';
$lang['si_LK']['BulkLoaderAdmin']['PREVIEW'] = 'පෙර දැක්ම';
$lang['si_LK']['BulkLoaderAdmin_left.ss']['FUNCTIONS'] = 'ක්රම වේද';
$lang['si_LK']['BulkLoaderAdmin_preview.ss']['RES'] = 'ප්‍රතිපල';
$lang['si_LK']['CMSLeft.ss']['DELPAGE'] = 'පිටු මකන්න';
$lang['si_LK']['CMSLeft.ss']['DELPAGES'] = 'තෝරාගත් පිටු මකන්න';
$lang['si_LK']['CMSLeft.ss']['GO'] = 'යන්න';
$lang['si_LK']['CMSLeft.ss']['NEWPAGE'] = 'අලුත් පිටුවක්';
$lang['si_LK']['CMSLeft.ss']['SELECTPAGESDEL'] = 'මකන්න අවශය පිටු තෝරා බොත්තම ඹබන්න';
$lang['si_LK']['CMSLeft.ss']['SITECONT'] = 'අඩවි අන්තර්ගතය';
$lang['si_LK']['CMSMain']['CANCEL'] = 'අවලoගු කරනවා';
$lang['si_LK']['CMSMain']['CHOOSEREPORT'] = '(වාර්තාවක් තෝරන්න)';
$lang['si_LK']['CMSMain']['COMPARINGV'] = 'ඹබ #%d හා #%d සංස්කරන සසදයි';
$lang['si_LK']['CMSMain']['COPYPUBTOSTAGE'] = 'ඹබට ප්රසිද්ධ කළ පිටුව වේදිකාවට පිටපත් කරන්න අවශයයද?';
$lang['si_LK']['CMSMain']['DELETEFP'] = 'ප්රසිද්ධ කල අඩවියෙන් ගලවන්න';
$lang['si_LK']['CMSMain']['EMAIL'] = 'ඊමේල්';
$lang['si_LK']['CMSMain']['GO'] = 'යන්න';
$lang['si_LK']['CMSMain']['METADESCOPT'] = 'අර්තකතනය';
$lang['si_LK']['CMSMain']['METAKEYWORDSOPT'] = 'ෙයාමු වචනය';
$lang['si_LK']['CMSMain']['NEW'] = 'අලුත්';
$lang['si_LK']['CMSMain']['NOCONTENT'] = 'හිස්';
$lang['si_LK']['CMSMain']['NOTHINGASSIGNED'] = 'ඔබට පැවරෑ වැඩ කසිවක් නැත';
$lang['si_LK']['CMSMain']['NOWAITINGON'] = 'ඔබ කිසිවකු බලාපොරොත්තු නොවේ';
$lang['si_LK']['CMSMain']['NOWBROKEN'] = 'පහත පිටු වලට කැඩුනු බැදීම් ඇත';
$lang['si_LK']['CMSMain']['NOWBROKEN2'] = 'ඹවුන්ගේ හිමිකරැවන්ට ඊමේල් කරන ලදී, ඹවුන් පිටු සකසනු ඇත';
$lang['si_LK']['CMSMain']['OK'] = 'හරි';
$lang['si_LK']['CMSMain']['PAGEDEL'] = '%d පිටුව මකන ලදී';
$lang['si_LK']['CMSMain']['PAGENOTEXISTS'] = 'මෙම  පිටුව තවදුරටත් නොපවතී';
$lang['si_LK']['CMSMain']['PAGEPUB'] = '%d පිටුව ප්‍රකාශ කරන ලදී ';
$lang['si_LK']['CMSMain']['PAGESDEL'] = '%d පිටු මකන ලදී';
$lang['si_LK']['CMSMain']['PAGESPUB'] = '%d පිටු ප්‍රකාශ කරන ලදී ';
$lang['si_LK']['CMSMain']['PAGETYPEOPT'] = 'පිටු වර්ගය';
$lang['si_LK']['CMSMain']['PRINT'] = 'ප්‍රින්ටි ';
$lang['si_LK']['CMSMain']['PUBALLCONFIRM'] = 'අඩවියේ ඇති සියලු පිටු, වේදිකාවට පිටපත් කර ප්රසිද්ධ කරන්න';
$lang['si_LK']['CMSMain']['PUBALLFUN'] = 'සියලු ක්රම වේද ප්රසිද්ධ කරන ලදී';
$lang['si_LK']['CMSMain']['PUBPAGES'] = 'සාර්තකයි, පිටු %d ප්රසිද්ධ කරන ලදී';
$lang['si_LK']['CMSMain']['REMOVEDFD'] = 'කටු අඩවියෙන් ගලවන්න';
$lang['si_LK']['CMSMain']['REMOVEDPAGE'] = '\'%s\'  ප්රසිද්ධ කල අඩවියෙන් ගලවන ලදී';
$lang['si_LK']['CMSMain']['RESTORE'] = 'ප්රතිස්තාපනය කරන්න';
$lang['si_LK']['CMSMain']['RESTORED'] = '\'%s\' සාර්තකව ප්රතිස්තාපනය ';
$lang['si_LK']['CMSMain']['ROLLBACK'] = 'මෙම සංස්රනය ඉවත් කරනන්න';
$lang['si_LK']['CMSMain']['ROLLEDBACKPUB'] = 'ප්රසිද්ධ කල සංස්කරනයට ගෙන යන ලදී. නව සංස්කරන අංකය #%d';
$lang['si_LK']['CMSMain']['ROLLEDBACKVERSION'] = '#%d වැනි සංස්රනය ඉවත් කරන ලදී, අලුත සංස්කරනය  #%d වේ';
$lang['si_LK']['CMSMain']['SAVE'] = 'සේවි කරන්න';
$lang['si_LK']['CMSMain']['SENTTO'] = 'අනුමැතිය සදහා යවන ලදී';
$lang['si_LK']['CMSMain']['STATUSOPT'] = 'තත්වය';
$lang['si_LK']['CMSMain']['TOTALPAGES'] = 'මුලු පිටු';
$lang['si_LK']['CMSMain']['VERSIONSNOPAGE'] = 'පිටුව සොයා ගැනීමට නොහැක';
$lang['si_LK']['CMSMain']['VIEWING'] = 'ඹබ %s වැනි දින #%d වැනි සංස්කරනය බලයි';
$lang['si_LK']['CMSMain']['VISITRESTORE'] = 'ප්රතිස්තාපන පිටුවට යන්න';
$lang['si_LK']['CMSMain']['WAITINGON'] = 'ඔබ මෙම පිටු <b>%d</b> වල අනකකු වැඩ කරන තුරැ බලාසිටියී';
$lang['si_LK']['CMSMain']['WORKTODO'] = 'ඔබට මෙම පිටු වල වැඩ ඇත';
$lang['si_LK']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'කටු අඩවියට ඵකතූ කරන ලදී නමුත් ප්රසිද්ධ නොකරන ලදී';
$lang['si_LK']['CMSMain_left.ss']['BATCHACTIONS'] = 'කන්ඩායම් වැඩ';
$lang['si_LK']['CMSMain_left.ss']['CHANGED'] = 'වෙනස් කරන ලදී';
$lang['si_LK']['CMSMain_left.ss']['CLOSEBOX'] = 'වැසීමට ඔබන්න';
$lang['si_LK']['CMSMain_left.ss']['COMMENTS'] = 'විචාර';
$lang['si_LK']['CMSMain_left.ss']['COMPAREMODE'] = 'සංසන්දනය කිරීම (පහත 2 ඹබන්න)';
$lang['si_LK']['CMSMain_left.ss']['CREATE'] = 'හදන්න';
$lang['si_LK']['CMSMain_left.ss']['DEL'] = 'මකන ලද';
$lang['si_LK']['CMSMain_left.ss']['DELETECONFIRM'] = 'තේරු පිටු මකන්න';
$lang['si_LK']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'කටු අඩවියෙන් මකන ලදී, නමුත් ඡීවී අඩවියේ ඇත';
$lang['si_LK']['CMSMain_left.ss']['EDITEDNOTPUB'] = 'කටු අඩවිය තුල සංස්කරනය කරන ලදී නමුත් ප්රසිද්ධ නොකරන ලදී';
$lang['si_LK']['CMSMain_left.ss']['EDITEDSINCE'] = 'සිට සංස්කරනය කර ඇත';
$lang['si_LK']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'ඇදීමෙන් සැකසීම වලංගු කරන්න';
$lang['si_LK']['CMSMain_left.ss']['GO'] = 'යන්න';
$lang['si_LK']['CMSMain_left.ss']['KEY'] = 'යතුර:';
$lang['si_LK']['CMSMain_left.ss']['NEW'] = 'අලුත්';
$lang['si_LK']['CMSMain_left.ss']['OPENBOX'] = 'මෙම පෙට්ටිය අරින්න මෙහි ඹබන්න';
$lang['si_LK']['CMSMain_left.ss']['PAGEVERSIONH'] = 'පිටු සංස්කරන ඉතිහාසය';
$lang['si_LK']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'තෝරාගත් පිටු ප්‍රකාශ කරන්න';
$lang['si_LK']['CMSMain_left.ss']['SEARCH'] = 'සොයන්න';
$lang['si_LK']['CMSMain_left.ss']['SEARCHTITLE'] = 'URL, මාතෘකා, මෙනුව, මාතෘකා හා අන්තර්ගතය තුල සොයන්න';
$lang['si_LK']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'වෙනස් කිරීමට අවශය පිටු තෝරා අදාල බොත්තම ඹබන්න';
$lang['si_LK']['CMSMain_left.ss']['SELECTPAGESDUP'] = 'ද්වීකරනය කිරීමට අවශය පිටු තෝරන්න, ඵ්වායේ ශාකා අවශයයද යන වග, හා ඵ්වා තැබිය යුතු ස්තානය';
$lang['si_LK']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'වෙනස් පිටු පමනක් පෙන්වන්න';
$lang['si_LK']['CMSMain_left.ss']['SHOWUNPUB'] = 'ප්‍රකාශයට පත් නොකරන ලද සංස්කරන';
$lang['si_LK']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'වෙබ අඩවි අන්තර්ගතය සහ සැකසුම';
$lang['si_LK']['CMSMain_left.ss']['SITEREPORTS'] = 'අඩවි වාර්තා';
$lang['si_LK']['CMSMain_left.ss']['TASKLIST'] = 'වැඩ ලැයිස්තුව';
$lang['si_LK']['CMSMain_left.ss']['WAITINGON'] = 'බලාපොරොත්තු වෙන් සිටියි';
$lang['si_LK']['CMSMain_right.ss']['ANYMESSAGE'] = 'ඹබගේ සංස්කාරකට පනිවුඩ තිබේද?';
$lang['si_LK']['CMSMain_right.ss']['CHOOSEPAGE'] = 'වමෙන් පිටුවක් තෝරනන';
$lang['si_LK']['CMSMain_right.ss']['LOADING'] = 'ලෝඩ් වෙමින් පවතියි';
$lang['si_LK']['CMSMain_right.ss']['MESSAGE'] = 'පනිවුඩය';
$lang['si_LK']['CMSMain_right.ss']['SENDTO'] = 'ලබන්නා';
$lang['si_LK']['CMSMain_right.ss']['STATUS'] = 'අවදිය';
$lang['si_LK']['CMSMain_right.ss']['SUBMIT'] = 'අනුමැතිය සදහා යවන්න';
$lang['si_LK']['CMSMain_right.ss']['WELCOMETO'] = 'ආයුබෝවන්';
$lang['si_LK']['CMSMain_versions.ss']['AUTHOR'] = 'කර්තු';
$lang['si_LK']['CMSMain_versions.ss']['NOTPUB'] = 'ප්‍රකාශ නොකරන ලදී ';
$lang['si_LK']['CMSMain_versions.ss']['PUBR'] = 'ප්‍රකාශකයා';
$lang['si_LK']['CMSMain_versions.ss']['UNKNOWN'] = 'නොදනී ';
$lang['si_LK']['CMSMain_versions.ss']['WHEN'] = 'කවදාද';
$lang['si_LK']['CMSRight.ss']['CHOOSEPAGE'] = 'වමෙන් පිටුවක් තෝරනන';
$lang['si_LK']['CMSRight.ss']['ECONTENT'] = 'අන්ර්ගතය සකසන්න';
$lang['si_LK']['CMSRight.ss']['WELCOMETO'] = 'ආයුබෝවන්';
$lang['si_LK']['CommentList.ss']['NOCOM'] = 'මෙම පිටුව විචාර කර නැත';
$lang['si_LK']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'ලයිස්තුවක් ඵකතු කරන්න';
$lang['si_LK']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'ලයිස්තු සොයන්න';
$lang['si_LK']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'පිලිතුරැ';
$lang['si_LK']['ImageEditor.ss']['CANCEL'] = 'අවලoගු කරනවා';
$lang['si_LK']['ImageEditor.ss']['CROP'] = 'අස්වැන්න';
$lang['si_LK']['ImageEditor.ss']['HEIGHT'] = 'දිග';
$lang['si_LK']['ImageEditor.ss']['REDO'] = 'නැවත කරන්න';
$lang['si_LK']['ImageEditor.ss']['ROT'] = 'කරකවන්න';
$lang['si_LK']['ImageEditor.ss']['SAVE'] = '&nbsp; පිංතූරය සේව් කරන්න';
$lang['si_LK']['ImageEditor.ss']['UNDO'] = 'තිබුන තැනට';
$lang['si_LK']['ImageEditor.ss']['UNTITLED'] = 'නිර්නාමික ලිපිය';
$lang['si_LK']['ImageEditor.ss']['WIDTH'] = 'පලල';
$lang['si_LK']['LeftAndMain']['CHANGEDURL'] = 'ULR එක වෙනස් කරන ලදී';
$lang['si_LK']['LeftAndMain']['COMMENTS'] = 'විචාර';
$lang['si_LK']['LeftAndMain']['FILESIMAGES'] = 'ලිපි හා පි0තුර';
$lang['si_LK']['LeftAndMain']['HELP'] = 'උදවි';
$lang['si_LK']['LeftAndMain']['PAGETYPE'] = 'පිටු වර්ගය';
$lang['si_LK']['LeftAndMain']['PERMAGAIN'] = 'ඹබ CMS ඵකෙන් ඉවත් වී ඇත. නැවත ඇතුල් වීමට නම හා මුරපදය යොදන්න';
$lang['si_LK']['LeftAndMain']['PERMALREADY'] = 'සමාවන්න ඔබට මෙම කොටස පරිශීලනය කල නොහැක. පහතින් වෙනත් නමකින් ඇතුල් වන්න';
$lang['si_LK']['LeftAndMain']['PERMDEFAULT'] = 'හදුනාගැනීමේ ක්රමයක් තෝරා ඹබගේ දත්ත ඇතුල් කරන්න';
$lang['si_LK']['LeftAndMain']['PLEASESAVE'] = 'පිටුව සේව් කරන්න, නැතිනම් මෙම පිටුව යාවත්කාලීන කල නොහැක';
$lang['si_LK']['LeftAndMain']['REPORTS'] = 'වාර්තා';
$lang['si_LK']['LeftAndMain']['REQUESTERROR'] = 'ඉල්ලිම වැරදියි';
$lang['si_LK']['LeftAndMain']['SAVED'] = 'සේවි කරන ලදී';
$lang['si_LK']['LeftAndMain']['SAVEDUP'] = 'සේවි කරන ලදී';
$lang['si_LK']['LeftAndMain']['SECURITY'] = 'ආරක්ශාව';
$lang['si_LK']['LeftAndMain']['SITECONTENT'] = 'වෙබ අඩවි අන්තර්ගතය';
$lang['si_LK']['LeftAndMain']['SITECONTENTLEFT'] = 'වෙබ අඩවි අන්තර්ගතය';
$lang['si_LK']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'මෙය නමි';
$lang['si_LK']['LeftAndMain.ss']['APPVERSIONTEXT2'] = 'ඹබ පාවිච්චි කරන සංස්කරනය, තාක්ශනිකව ඵය CVS ශාකා';
$lang['si_LK']['LeftAndMain.ss']['ARCHS'] = 'පැරනි අඩවිය';
$lang['si_LK']['LeftAndMain.ss']['DRAFTS'] = 'කටු අඩවිය';
$lang['si_LK']['LeftAndMain.ss']['EDIT'] = 'සංස්කරනය';
$lang['si_LK']['LeftAndMain.ss']['EDITPROFILE'] = 'ප්රතිරැපය';
$lang['si_LK']['LeftAndMain.ss']['LOADING'] = 'ලෝඩ් වෙමින් පවතියි';
$lang['si_LK']['LeftAndMain.ss']['LOGGEDINAS'] = 'ඇතුල් වී ඇත්තේ';
$lang['si_LK']['LeftAndMain.ss']['LOGOUT'] = 'පිටවීම';
$lang['si_LK']['LeftAndMain.ss']['PUBLIS'] = 'ප්‍රකාශයට පත් කරන ලද අඩවි';
$lang['si_LK']['LeftAndMain.ss']['SSWEB'] = 'SilverStripe වෙබ් අඩවිය';
$lang['si_LK']['LeftAndMain.ss']['VIEWPAGEIN'] = 'පිටු දර්ශනය';
$lang['si_LK']['LeftAndMain']['STATUSTO'] = 'තත්වය වෙනස් කරන ලදී';
$lang['si_LK']['LeftAndMain']['TREESITECONTENT'] = 'වෙබ අඩවි අන්තර්ගතය';
$lang['si_LK']['MemberList']['ADD'] = 'එකතු කරන්න';
$lang['si_LK']['MemberList']['EMAIL'] = 'ඊමේල් ';
$lang['si_LK']['MemberList']['FILTERBYG'] = 'කන්ඩායමෙන් වෙන් කරන්න';
$lang['si_LK']['MemberList']['FN'] = 'මුල් නම';
$lang['si_LK']['MemberList']['PASSWD'] = 'මුරපදය';
$lang['si_LK']['MemberList']['SEARCH'] = 'සොයන්න';
$lang['si_LK']['MemberList']['SN'] = 'වාසගම';
$lang['si_LK']['MemberList.ss']['FILTER'] = 'පෙරන්න';
$lang['si_LK']['MemberList_Table.ss']['EMAIL'] = 'ඊමේල් ලිපිනය';
$lang['si_LK']['MemberList_Table.ss']['FN'] = 'මුල් නම';
$lang['si_LK']['MemberList_Table.ss']['PASSWD'] = 'මුර පදය';
$lang['si_LK']['MemberList_Table.ss']['SN'] = 'වාසගම';
$lang['si_LK']['MemberTableField']['ADD'] = 'එකතු කරන්න';
$lang['si_LK']['MemberTableField']['ADDEDTOGROUP'] = 'කන්ඩායම් සාමාඡිකයෙකු ඵකතු කරන්න';
$lang['si_LK']['MemberTableField.ss']['ADDNEW'] = 'අලුත්';
$lang['si_LK']['MemberTableField.ss']['DELETEMEMBER'] = 'මෙම සාමාජිකයා මකන්න';
$lang['si_LK']['MemberTableField.ss']['EDITMEMBER'] = 'මෙම සාමාජිකයා සංස්කරනය කරන්න';
$lang['si_LK']['MemberTableField.ss']['SHOWMEMBER'] = 'මෙම සාමාජිකයා පෙන්වන්න';
$lang['si_LK']['PageComment']['COMMENTBY'] = '\'%s\' විසින් %s  විචාර කරන ලදී';
$lang['si_LK']['PageCommentInterface.ss']['COMMENTS'] = 'විචාර';
$lang['si_LK']['PageCommentInterface.ss']['NEXT'] = 'පසු';
$lang['si_LK']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'මෙම පිටුව විචාර කර නැත';
$lang['si_LK']['PageCommentInterface.ss']['POSTCOM'] = 'ඔබේ විචාරය එවන්න';
$lang['si_LK']['PageCommentInterface.ss']['PREV'] = 'පෙර';
$lang['si_LK']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'මෙම විචාරය ස්පෑම් ඵකක් නොවේ';
$lang['si_LK']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'මෙම විචාරය ස්පෑම් ඵකකි';
$lang['si_LK']['PageCommentInterface_singlecomment.ss']['PBY'] = 'ඵවන ලද්දේ';
$lang['si_LK']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'විචාරය මකන්න';
$lang['si_LK']['ReportAdmin_left.ss']['REPORTS'] = 'වාර්තා';
$lang['si_LK']['ReportAdmin_right.ss']['WELCOME1'] = 'ආයුබෝවන්';
$lang['si_LK']['ReportAdmin_right.ss']['WELCOME2'] = 'වාර්තා පෙදෙස, වාර්තාවක් ලයිතුවෙන් තෝරන්න';
$lang['si_LK']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'වාර්තා';
$lang['si_LK']['SecurityAdmin']['ADDMEMBER'] = 'සාමාජිකයෙක් ඵකතු කරන්න';
$lang['si_LK']['SecurityAdmin']['ADVANCEDONLY'] = 'මෙම කොටස උසස් පරිශීලකයින්ට පමණයි. වැඩි විස්තර <a href="http://doc.silverstripe.com/doku.php?id=permissions:codes" target="_blank">සදහා</a>';
$lang['si_LK']['SecurityAdmin']['NEWGROUP'] = 'අලුත් කන්ඩාමක්';
$lang['si_LK']['SecurityAdmin']['SAVE'] = 'සේවි කරන්න';
$lang['si_LK']['SecurityAdmin']['SGROUPS'] = 'ආරක්ශක කන්ඩායම්';
$lang['si_LK']['SecurityAdmin_left.ss']['CREATE'] = 'හදන්න';
$lang['si_LK']['SecurityAdmin_left.ss']['DEL'] = 'මකන්න';
$lang['si_LK']['SecurityAdmin_left.ss']['DELGROUPS'] = 'තෝරාගත් කඩාන්යම් මකන්න';
$lang['si_LK']['SecurityAdmin_left.ss']['GO'] = 'යන්න';
$lang['si_LK']['SecurityAdmin_left.ss']['SECGROUPS'] = 'ආරක්ශක කන්ඩායම්';
$lang['si_LK']['SecurityAdmin_left.ss']['SELECT'] = 'මකන්න අවශය පිටු තෝරා පහත බොත්තම ඹබන්න';
$lang['si_LK']['SecurityAdmin_left.ss']['TOREORG'] = 'අඩවිය නැවත සැකසීමට පිටු අදින්න';
$lang['si_LK']['SecurityAdmin_right.ss']['WELCOME1'] = 'ආයුබෝවන්';
$lang['si_LK']['SecurityAdmin_right.ss']['WELCOME2'] = 'ආරක්ශාව මෙහෙයවීම. වමෙන් කන්ඩායමක් තෝරන්න';
$lang['si_LK']['SideReport']['EMPTYPAGES'] = 'හිස් පිටු';
$lang['si_LK']['SideReport']['LAST2WEEKS'] = 'අවසාන සති 2 තුල වෙනස්  කරන ලද පිටු';
$lang['si_LK']['SideReport']['REPEMPTY'] = '%s වාර්තාව හිස්';
$lang['si_LK']['StaticExporter']['BASEURL'] = 'පාදම් URL';
$lang['si_LK']['StaticExporter']['EXPORTTO'] = 'ඵම ගොනුවට අපනයනය කරන්නන';
$lang['si_LK']['StaticExporter']['FOLDEREXPORT'] = 'අපනයනය කරන ගොනුව';
$lang['si_LK']['StaticExporter']['NAME'] = 'ස්තිතික අපනයනය කරන්නා';
$lang['si_LK']['StaticExporter']['ONETHATEXISTS'] = 'පවතින ගොනුවක් තෝරන්න';
$lang['si_LK']['SubmittedFormEmail.ss']['SUBMITTED'] = 'පහත දත්ත අඩවියට භාරකරන ලදී';
$lang['si_LK']['TaskList.ss']['BY'] = 'විසින්';
$lang['si_LK']['ThumbnailStripField']['NOTAFOLDER'] = 'මෙය ගොනුවක් නොවේ';
$lang['si_LK']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(ඉහතින් ගොනුවක් තෝරන්න)';
$lang['si_LK']['ViewArchivedEmail.ss']['CANACCESS'] = 'මෙම බැදීමෙන් පැරනි අඩවියට ප්රවිෂ්ට විය හැක';
$lang['si_LK']['ViewArchivedEmail.ss']['HAVEASKED'] = 'ඹබට අපගේ වෙබ් අඩවිය නිරීක්ශනය කරන ලෙස ඉල්ලා ඇත';
$lang['si_LK']['WaitingOn.ss']['ATO'] = 'බාර කරේ';

?>