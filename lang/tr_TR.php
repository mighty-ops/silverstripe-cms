<?php

/**
 * Turkish (Turkey) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('tr_TR', $lang) && is_array($lang['tr_TR'])) {
	$lang['tr_TR'] = array_merge($lang['en_US'], $lang['tr_TR']);
} else {
	$lang['tr_TR'] = $lang['en_US'];
}

$lang['tr_TR']['AssetAdmin']['CHOOSEFILE'] = 'Yükleyeceğiniz Dosyayı seçiniz';
$lang['tr_TR']['AssetAdmin']['CONTENTMODBY'] = 'İçeriği değiştirebilme yetkisi olan(lar)';
$lang['tr_TR']['AssetAdmin']['CONTENTUSABLEBY'] = 'İçeriği kullanabilme yetkisi olan(lar)';
$lang['tr_TR']['AssetAdmin']['CREATED'] = 'Yükleme Tarihi';
$lang['tr_TR']['AssetAdmin']['DELETEDX'] = '%s tane dosya silindi.%s';
$lang['tr_TR']['AssetAdmin']['DELETEUNUSEDTHUMBNAILS'] = 'Kullanılmayan thumbnail\'leri sil';
$lang['tr_TR']['AssetAdmin']['DELSELECTED'] = 'Seçilen dosyaları sil';
$lang['tr_TR']['AssetAdmin']['DETAILSTAB'] = 'Detaylar';
$lang['tr_TR']['AssetAdmin']['FILENAME'] = 'Dosya adı';
$lang['tr_TR']['AssetAdmin']['FILESREADY'] = 'Sunucuya yüklenmeye hazır dosyalar:';
$lang['tr_TR']['AssetAdmin']['FILESTAB'] = 'Dosyalar';
$lang['tr_TR']['AssetAdmin']['FOLDERDELETED'] = 'klasör silindi.';
$lang['tr_TR']['AssetAdmin']['FOLDERSDELETED'] = 'klasörler silindi.';
$lang['tr_TR']['AssetAdmin']['LASTEDITED'] = 'Güncelleme Tarihi';
$lang['tr_TR']['AssetAdmin']['MOVEDX'] = '%s dosyanın yeri değiştirildi';
$lang['tr_TR']['AssetAdmin']['NEWFOLDER'] = 'Yeni Klasör';
$lang['tr_TR']['AssetAdmin']['NOTEMP'] = 'Yüklemeler için belirlenen bir geçici klasör bulunmuyor. Lütfen php.ini içerisinde upload_tmp_dir değeri oluşturun.';
$lang['tr_TR']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'Yüklenecek birşey bulunamadı';
$lang['tr_TR']['AssetAdmin']['NOWBROKEN'] = 'Aşağıdaki sayfalarda şuan hatalı bağlantılar içeriyor:';
$lang['tr_TR']['AssetAdmin']['NOWBROKEN2'] = 'Sahiplerine e-posta gönderildi, o sayfalari düzeltecekler.';
$lang['tr_TR']['AssetAdmin']['ONLYADMINS'] = 'Sadece yöneticiler %s dosyalarını yükleyebilirler.';
$lang['tr_TR']['AssetAdmin']['OWNER'] = 'Sahibi';
$lang['tr_TR']['AssetAdmin']['SAVEDFILE'] = '%s dosyası kaydedildi';
$lang['tr_TR']['AssetAdmin']['SAVEFOLDERNAME'] = 'Klasör adını kaydet';
$lang['tr_TR']['AssetAdmin']['THUMBSDELETED'] = 'Tüm gereksiz pul imgeler silindi.';
$lang['tr_TR']['AssetAdmin']['TITLE'] = 'Başlık';
$lang['tr_TR']['AssetAdmin']['TOOLARGE'] = '%s dosyası çok büyük (%s). Yükleyeceğiniz dosyalar %s \'den büyük olamazlar.';
$lang['tr_TR']['AssetAdmin']['TYPE'] = 'Dosya Türü';
$lang['tr_TR']['AssetAdmin']['UNUSEDFILESTAB'] = 'Kullanılmayan dosyalar';
$lang['tr_TR']['AssetAdmin']['UNUSEDFILESTITLE'] = 'Kullanılmayan dosyalar';
$lang['tr_TR']['AssetAdmin']['UNUSEDTHUMBNAILSTITLE'] = 'Kullanılmayan thumbnail\'ler';
$lang['tr_TR']['AssetAdmin']['UPLOAD'] = 'Aşağıda Listelenen Dosyaları Sunucuya Yükle';
$lang['tr_TR']['AssetAdmin']['UPLOADEDX'] = '%s dosya sunucuya yüklendi';
$lang['tr_TR']['AssetAdmin']['UPLOADTAB'] = 'Sunucuya Yükle';
$lang['tr_TR']['AssetAdmin']['VIEWASSET'] = 'Varlık Göster';
$lang['tr_TR']['AssetAdmin']['VIEWEDITASSET'] = 'Göster/Varlık düzenle';
$lang['tr_TR']['AssetAdmin_left.ss']['CREATE'] = 'Yeni Oluştur';
$lang['tr_TR']['AssetAdmin_left.ss']['DELETE'] = 'Sil';
$lang['tr_TR']['AssetAdmin_left.ss']['DELFOLDERS'] = 'Seçilen klasörleri sil';
$lang['tr_TR']['AssetAdmin_left.ss']['ENABLEDRAGGING'] = 'Sürükle &amp; bırak düzenlemesine izin ver';
$lang['tr_TR']['AssetAdmin_left.ss']['FOLDERS'] = 'Klasörler';
$lang['tr_TR']['AssetAdmin_left.ss']['GO'] = 'Git';
$lang['tr_TR']['AssetAdmin_left.ss']['SELECTTODEL'] = 'Silmek istediğiniz klasörleri seçin ve ardından aşağıdaki butona basınız.';
$lang['tr_TR']['AssetAdmin_left.ss']['TOREORG'] = 'Klasörlerinizin yerlerini, sürükle bırak yöntemiyle düzenleyebilirsiniz';
$lang['tr_TR']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'Lütfen sol taraftan bir sayfa seçiniz';
$lang['tr_TR']['AssetAdmin_right.ss']['WELCOME'] = 'Hoşgeldiniz';
$lang['tr_TR']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'Bu klasöre dosya yüklemeye yetkiniz yok.';
$lang['tr_TR']['AssetTableField']['CAPTION'] = 'Başlık';
$lang['tr_TR']['AssetTableField']['CREATED'] = 'Yükleme tarihi';
$lang['tr_TR']['AssetTableField']['DIM'] = 'Boyutları';
$lang['tr_TR']['AssetTableField']['DIMLIMT'] = 'Popup Pencerede Boyutlari Limitle';
$lang['tr_TR']['AssetTableField']['EDITIMAGE'] = 'Bu resmi düzenle';
$lang['tr_TR']['AssetTableField']['FILENAME'] = 'Dosya Adı';
$lang['tr_TR']['AssetTableField']['GALLERYOPTIONS'] = 'Galeri Seçenekleri';
$lang['tr_TR']['AssetTableField']['IMAGE'] = 'Resim';
$lang['tr_TR']['AssetTableField']['ISFLASH'] = 'Bir Flash Dosyasıdır';
$lang['tr_TR']['AssetTableField']['LASTEDIT'] = 'Güncelleme tarihi';
$lang['tr_TR']['AssetTableField']['MAIN'] = 'Ana';
$lang['tr_TR']['AssetTableField']['NOLINKS'] = 'Bu dosyaya hiç bir sayfadan bağlantı verilmemiştir.';
$lang['tr_TR']['AssetTableField']['OWNER'] = 'Sahibi';
$lang['tr_TR']['AssetTableField']['PAGESLINKING'] = 'Aşağıdaki sayfalarda bu dosyaya bağlantı var:';
$lang['tr_TR']['AssetTableField']['POPUPHEIGHT'] = 'Açılır Pencere Yüksekliği';
$lang['tr_TR']['AssetTableField']['POPUPWIDTH'] = 'Açılır Pencere Genişliği';
$lang['tr_TR']['AssetTableField']['SIZE'] = 'Boyutu';
$lang['tr_TR']['AssetTableField.ss']['DELFILE'] = 'Bu dosyayı sil';
$lang['tr_TR']['AssetTableField.ss']['DRAGTOFOLDER'] = 'Dosyayı taşımak için dosyayı sol taraftaki bir klasöre sürükleyip bırakınız';
$lang['tr_TR']['AssetTableField.ss']['EDIT'] = 'Varlık Düzenle';
$lang['tr_TR']['AssetTableField.ss']['SHOW'] = 'Varlık Görüntüle';
$lang['tr_TR']['AssetTableField']['SWFFILEOPTIONS'] = 'SWF Dosya Seçenekleri';
$lang['tr_TR']['AssetTableField']['TITLE'] = 'Başlık';
$lang['tr_TR']['AssetTableField']['TYPE'] = 'Türü';
$lang['tr_TR']['AssetTableField']['URL'] = 'URL';
$lang['tr_TR']['BulkLoaderAdmin']['CONFIRMBULK'] = 'Toplu veri yüklemeyi onaylayın';
$lang['tr_TR']['BulkLoaderAdmin']['CSVFILE'] = 'CSV Dosyası';
$lang['tr_TR']['BulkLoaderAdmin']['DATALOADED'] = 'Bu veri şuraya yüklenmiştir:';
$lang['tr_TR']['BulkLoaderAdmin']['PRESSCNT'] = 'Veriyi şuraya yüklemek için ileriye basın:';
$lang['tr_TR']['BulkLoaderAdmin']['PREVIEW'] = 'Önizleme';
$lang['tr_TR']['BulkLoaderAdmin_left.ss']['BATCHEF'] = 'Toplu Yazı İşlemleri';
$lang['tr_TR']['BulkLoaderAdmin_left.ss']['FUNCTIONS'] = 'İşlemler';
$lang['tr_TR']['BulkLoaderAdmin_preview.ss']['RES'] = 'Sonuçlar';
$lang['tr_TR']['CMSLeft.ss']['DELPAGE'] = 'Sayfaları Sil...';
$lang['tr_TR']['CMSLeft.ss']['DELPAGES'] = 'Seçili sayfaları sil';
$lang['tr_TR']['CMSLeft.ss']['GO'] = 'Git';
$lang['tr_TR']['CMSLeft.ss']['NEWPAGE'] = 'Yeni Sayfa...';
$lang['tr_TR']['CMSLeft.ss']['SELECTPAGESDEL'] = 'Silmek istediğiniz sayfaları seçip aşağıdaki tuşa basınız';
$lang['tr_TR']['CMSLeft.ss']['SITECONT'] = 'Site İçeriği';
$lang['tr_TR']['CMSMain']['ACCESS'] = 'CMS içinde %s erişimi';
$lang['tr_TR']['CMSMain']['CANCEL'] = 'İptal';
$lang['tr_TR']['CMSMain']['CHOOSEREPORT'] = '(Bir rapor seçin)';
$lang['tr_TR']['CMSMain']['COMPARINGV'] = '#%d ve #%d sürümlerini karşılaştırıyorsunuz';
$lang['tr_TR']['CMSMain']['COPYPUBTOSTAGE'] = 'Yayınlanmış içeriği taslak siteye kopyalamak istediğinize emin misiniz?';
$lang['tr_TR']['CMSMain']['DELETE'] = 'Taslak siteden sil';
$lang['tr_TR']['CMSMain']['DELETEFP'] = '"Yayınlanmış Site"den sil';
$lang['tr_TR']['CMSMain']['DESCREMOVED'] = 've %s adet türetilen';
$lang['tr_TR']['CMSMain']['EMAIL'] = 'Eposta';
$lang['tr_TR']['CMSMain']['GO'] = 'Git';
$lang['tr_TR']['CMSMain']['METADESCOPT'] = 'Tanım';
$lang['tr_TR']['CMSMain']['METAKEYWORDSOPT'] = 'Anahtar kelimeler';
$lang['tr_TR']['CMSMain']['NEW'] = 'Yeni';
$lang['tr_TR']['CMSMain']['NOCONTENT'] = 'içerik yok';
$lang['tr_TR']['CMSMain']['NOTHINGASSIGNED'] = 'Size verilmiş herhangi bir görev yok.';
$lang['tr_TR']['CMSMain']['NOWAITINGON'] = 'Beklediğiniz hiç kimse yok.';
$lang['tr_TR']['CMSMain']['NOWBROKEN'] = 'Aşağıdaki sayfalar şu anda çalışmayan bağlantılar içeriyor:';
$lang['tr_TR']['CMSMain']['NOWBROKEN2'] = 'Sayfaların sahiplerine eposta ile bilgi verildi ve en kısa sürede hatalı sayfaları düzelteceklerdir.';
$lang['tr_TR']['CMSMain']['OK'] = 'TAMAM';
$lang['tr_TR']['CMSMain']['PAGEDEL'] = '%d sayfa silindi';
$lang['tr_TR']['CMSMain']['PAGENOTEXISTS'] = 'Böyle bir sayfa bulunamadı';
$lang['tr_TR']['CMSMain']['PAGEPUB'] = '%d sayfa yayınlandı';
$lang['tr_TR']['CMSMain']['PAGESDEL'] = '%d sayfa silindi';
$lang['tr_TR']['CMSMain']['PAGESPUB'] = '%d sayfa yayınlandı';
$lang['tr_TR']['CMSMain']['PAGETYPEOPT'] = 'Sayfa Tipi';
$lang['tr_TR']['CMSMain']['PRINT'] = 'Yazdır';
$lang['tr_TR']['CMSMain']['PUBALLCONFIRM'] = 'Lütfen taslak sitedeki tüm sayfaları yayınlanmakta olan siteye kopyalayıp yayınla.';
$lang['tr_TR']['CMSMain']['PUBALLFUN'] = '"Hepsini Yayınla" özelliği';
$lang['tr_TR']['CMSMain']['PUBALLFUN2'] = 'Bu butona bastığınız zaman, tüm sayfaları tek tek açıp "yayınla" butonuna basmışsınız gibi işlem yapılacaktır.  Bunun amacı sitede toplu miktarda içerik düzenleyip eklediyseniz (örneğin sitenin ilk yayınlanması gibi) size kolaylık sağlamaktır.';
$lang['tr_TR']['CMSMain']['PUBPAGES'] = 'Tamamlandı: %d sayfa yayınlandı';
$lang['tr_TR']['CMSMain']['REMOVED'] = '\'%s\' aktif siteden silindi';
$lang['tr_TR']['CMSMain']['REMOVEDFD'] = '"Taslak Site" den kaldırıldı';
$lang['tr_TR']['CMSMain']['REMOVEDPAGE'] = '\'%s\' yayınlanmış siteden kaldırıldı';
$lang['tr_TR']['CMSMain']['REMOVEDPAGEFROMDRAFT'] = '\'%s\' taslak siteden silindi';
$lang['tr_TR']['CMSMain']['REPORT'] = 'Rapor';
$lang['tr_TR']['CMSMain']['RESTORE'] = 'Geri Yükle';
$lang['tr_TR']['CMSMain']['RESTORED'] = '\'%s\' başarılı bir şekilde geri yüklendi';
$lang['tr_TR']['CMSMain']['ROLLBACK'] = 'Bu sürüme geri dön';
$lang['tr_TR']['CMSMain']['ROLLEDBACKPUB'] = 'Yayınlanmış sürüme geri alındı. Yeni sürüm numarası: #%d';
$lang['tr_TR']['CMSMain']['ROLLEDBACKVERSION'] = '#%d numaralı sürüme geri dönüldü.  Yeni sürüm numarası #%d';
$lang['tr_TR']['CMSMain']['SAVE'] = 'Kaydet';
$lang['tr_TR']['CMSMain']['SENTTO'] = 'Onay için %s %s\'e gönderildi.';
$lang['tr_TR']['CMSMain']['STATUSOPT'] = 'Durum';
$lang['tr_TR']['CMSMain']['TOTALPAGES'] = 'Toplam sayfa sayısı:';
$lang['tr_TR']['CMSMain']['VERSIONSNOPAGE'] = '#%d sayfası bulunamadı';
$lang['tr_TR']['CMSMain']['VIEWING'] = 'Şu anda görüntülemekte olduğunuz sürüm #%d, %s tarihinde oluşturuldu';
$lang['tr_TR']['CMSMain']['VISITRESTORE'] = 'restorepage/(ID) ziyaret et';
$lang['tr_TR']['CMSMain']['WAITINGON'] = 'Bu <b>%d</b> sayfa üzerinde çalışacak/çalışan kişileri bekliyorsunuz.';
$lang['tr_TR']['CMSMain']['WORKTODO'] = 'Bu <b>%d</b> sayfa(lar) üzerinde çalışmanız gerekmektedir.';
$lang['tr_TR']['CMSMain_dialog.ss']['BUTTONNOTFOUND'] = 'Buton adı bulunamadı';
$lang['tr_TR']['CMSMain_dialog.ss']['NOLINKED'] = 'Buton tıklamasıyla ana sayfaya yönlendirmek için kullanılan window.linkedObject bulunamadı';
$lang['tr_TR']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'Taslak siteye eklendi ve henüz yayınlanmadı';
$lang['tr_TR']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = 'Arama Kriteri Ekle...';
$lang['tr_TR']['CMSMain_left.ss']['BATCHACTIONS'] = 'Toplu İşlemler';
$lang['tr_TR']['CMSMain_left.ss']['CHANGED'] = 'değiştirildi';
$lang['tr_TR']['CMSMain_left.ss']['CLOSEBOX'] = 'bu kutuyu kapatmak için tıklayın';
$lang['tr_TR']['CMSMain_left.ss']['COMMENTS'] = 'Yorumlar';
$lang['tr_TR']['CMSMain_left.ss']['COMPAREMODE'] = 'Karşılaştırma modu (2 tanesini seçin)';
$lang['tr_TR']['CMSMain_left.ss']['CREATE'] = 'Yeni Oluştur';
$lang['tr_TR']['CMSMain_left.ss']['DEL'] = 'silindi';
$lang['tr_TR']['CMSMain_left.ss']['DELETECONFIRM'] = 'Seçilen sayfaları sil';
$lang['tr_TR']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'Taslak siteden silinmiş ama hala yayındaki sitede yayınlanmakta olan içerik';
$lang['tr_TR']['CMSMain_left.ss']['EDITEDNOTPUB'] = '"Taslak Site" üzerinde değişiklik gerçekleştirildi ve henüz yayınlanmadı';
$lang['tr_TR']['CMSMain_left.ss']['EDITEDSINCE'] = 'İlk Düzenleme Tarihinden İtibaren';
$lang['tr_TR']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'Sürükle bırak yöntemiyle sıralamaya izin ver';
$lang['tr_TR']['CMSMain_left.ss']['GO'] = 'Git';
$lang['tr_TR']['CMSMain_left.ss']['KEY'] = 'Bilgi:';
$lang['tr_TR']['CMSMain_left.ss']['NEW'] = 'yeni';
$lang['tr_TR']['CMSMain_left.ss']['OPENBOX'] = 'bu kutuyu açmak için tıklayın';
$lang['tr_TR']['CMSMain_left.ss']['PAGEVERSIONH'] = 'Sayfa Sürüm Geçmişi';
$lang['tr_TR']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'Seçilen sayfaları yayınla';
$lang['tr_TR']['CMSMain_left.ss']['SEARCH'] = 'Ara';
$lang['tr_TR']['CMSMain_left.ss']['SEARCHTITLE'] = 'URL, Başlık, Menü Başlığı ve İçerikte Arama Yap';
$lang['tr_TR']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'Değiştirmek istediğiniz sayfaları seçin ve yapmak istediğiniz toplu işlemi seçin:';
$lang['tr_TR']['CMSMain_left.ss']['SELECTPAGESDUP'] = 'Çoğaltmak istediğiniz sayfaları, bu sayfaların altındaki sayfalarında dahil edilip edilmeyeceğini ve bu kopyaların nerede yer almasını istediğinizi seçiniz.';
$lang['tr_TR']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'Sadece değiştirilmiş sayfaları göster';
$lang['tr_TR']['CMSMain_left.ss']['SHOWUNPUB'] = 'Yayınlanmamış sürümleri göster';
$lang['tr_TR']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'Site İçeriği ve Yapısı';
$lang['tr_TR']['CMSMain_left.ss']['SITEREPORTS'] = 'Site Raporları';
$lang['tr_TR']['CMSMain_left.ss']['TASKLIST'] = 'Görev listesi';
$lang['tr_TR']['CMSMain_left.ss']['WAITINGON'] = 'Beklenen';
$lang['tr_TR']['CMSMain_right.ss']['ANYMESSAGE'] = 'Editör için bir mesajınız var mı?';
$lang['tr_TR']['CMSMain_right.ss']['CHOOSEPAGE'] = 'Lütfen sol taraftan bir sayfa seçiniz';
$lang['tr_TR']['CMSMain_right.ss']['LOADING'] = 'yükleniyor...';
$lang['tr_TR']['CMSMain_right.ss']['MESSAGE'] = 'Mesaj';
$lang['tr_TR']['CMSMain_right.ss']['SENDTO'] = 'Şuraya gönder:';
$lang['tr_TR']['CMSMain_right.ss']['STATUS'] = 'Durum';
$lang['tr_TR']['CMSMain_right.ss']['SUBMIT'] = 'Onay için gönder';
$lang['tr_TR']['CMSMain_right.ss']['WELCOMETO'] = 'Hoşgeldiniz';
$lang['tr_TR']['CMSMain_versions.ss']['AUTHOR'] = 'Yazan';
$lang['tr_TR']['CMSMain_versions.ss']['NOTPUB'] = 'Yayınlanmadı';
$lang['tr_TR']['CMSMain_versions.ss']['PUBR'] = 'Yayınlayan';
$lang['tr_TR']['CMSMain_versions.ss']['UNKNOWN'] = 'Bilinmiyor';
$lang['tr_TR']['CMSMain_versions.ss']['WHEN'] = 'Tarih';
$lang['tr_TR']['CMSRight.ss']['CHOOSEPAGE'] = 'Lütfen sol taraftan bir sayfa seçiniz';
$lang['tr_TR']['CMSRight.ss']['ECONTENT'] = 'İçeriği Düzenle';
$lang['tr_TR']['CMSRight.ss']['WELCOMETO'] = 'Hoşgeldiniz';
$lang['tr_TR']['CommentAdmin']['ACCEPT'] = 'Kabul';
$lang['tr_TR']['CommentAdmin']['APPROVED'] = 'Kabul edilen %s yorum.';
$lang['tr_TR']['CommentAdmin']['APPROVEDCOMMENTS'] = 'Onaylanmış Yorumlar';
$lang['tr_TR']['CommentAdmin']['AUTHOR'] = 'Yazar';
$lang['tr_TR']['CommentAdmin']['COMMENT'] = 'Yorum';
$lang['tr_TR']['CommentAdmin']['COMMENTS'] = 'Yorum';
$lang['tr_TR']['CommentAdmin']['COMMENTSAWAITINGMODERATION'] = 'Onay Bekleyen Yorumlar';
$lang['tr_TR']['CommentAdmin']['DATEPOSTED'] = 'Gönderilme Tarihi';
$lang['tr_TR']['CommentAdmin']['DELETE'] = 'Sil';
$lang['tr_TR']['CommentAdmin']['DELETEALL'] = 'Hepsini Sil';
$lang['tr_TR']['CommentAdmin']['DELETED'] = '%s yorum silindi.';
$lang['tr_TR']['CommentAdmin']['MARKASNOTSPAM'] = 'Spam değil olarak işaretle';
$lang['tr_TR']['CommentAdmin']['MARKEDNOTSPAM'] = '%s yorum spam değil olarak işaretlendi.';
$lang['tr_TR']['CommentAdmin']['MARKEDSPAM'] = '%s yorum spam olarak işaretlendi.';
$lang['tr_TR']['CommentAdmin']['NAME'] = 'İsim';
$lang['tr_TR']['CommentAdmin']['PAGE'] = 'Sayfa';
$lang['tr_TR']['CommentAdmin']['SPAM'] = 'Spam';
$lang['tr_TR']['CommentAdmin']['SPAMMARKED'] = 'Spam olarak işaretle';
$lang['tr_TR']['CommentAdmin_left.ss']['COMMENTS'] = 'Yorumlar';
$lang['tr_TR']['CommentAdmin_right.ss']['WELCOME1'] = 'Hoşgeldiniz, ';
$lang['tr_TR']['CommentAdmin_right.ss']['WELCOME2'] = 'yorum yönetimi. Lütfen soldaki klasör ağacından bir seçim yapın.';
$lang['tr_TR']['CommentAdmin_SiteTree.ss']['APPROVED'] = 'Onaylanmış';
$lang['tr_TR']['CommentAdmin_SiteTree.ss']['AWAITMODERATION'] = 'Onay bekleyen';
$lang['tr_TR']['CommentAdmin_SiteTree.ss']['COMMENTS'] = 'Yorumlar';
$lang['tr_TR']['CommentAdmin_SiteTree.ss']['SPAM'] = 'Spam';
$lang['tr_TR']['CommentList.ss']['CREATEDW'] = '\'İş akışı işlemleri\' nden birisi (Yayınla, Reddet, Gönder) kullanıldığında yorum oluşturulur.';
$lang['tr_TR']['CommentList.ss']['NOCOM'] = 'Bu sayfa için henüz yorum yapılmamıştır.';
$lang['tr_TR']['CommentTableField']['FILTER'] = 'Filtre';
$lang['tr_TR']['CommentTableField']['SEARCH'] = 'Ara';
$lang['tr_TR']['CommentTableField.ss']['APPROVE'] = 'onayla';
$lang['tr_TR']['CommentTableField.ss']['APPROVECOMMENT'] = 'Bu yorumu onayla';
$lang['tr_TR']['CommentTableField.ss']['DELETE'] = 'sil';
$lang['tr_TR']['CommentTableField.ss']['DELETEROW'] = 'Bu satırı sil';
$lang['tr_TR']['CommentTableField.ss']['EDIT'] = 'düzenle';
$lang['tr_TR']['CommentTableField.ss']['HAM'] = 'ham';
$lang['tr_TR']['CommentTableField.ss']['MARKASSPAM'] = 'Bu yorumu spam olarak işaretle';
$lang['tr_TR']['CommentTableField.ss']['MARKNOSPAM'] = 'Bu yorumdaki spam işaretini kaldır';
$lang['tr_TR']['CommentTableField.ss']['NOITEMSFOUND'] = 'Aradığınız öğe bulunamadı';
$lang['tr_TR']['CommentTableField.ss']['SPAM'] = 'spam';
$lang['tr_TR']['GenericDataAdmin']['CHOOSECRIT'] = 'Lütfen arama kriteri seçip \'Git\' e basınız.';
$lang['tr_TR']['GenericDataAdmin']['CREATE'] = 'Oluştur';
$lang['tr_TR']['GenericDataAdmin']['DELETE'] = 'Sil';
$lang['tr_TR']['GenericDataAdmin']['DELETEDSUCCESS'] = 'Başarıyla silindi';
$lang['tr_TR']['GenericDataAdmin']['EXPORTCSV'] = 'CSV olarak kaydet';
$lang['tr_TR']['GenericDataAdmin']['FOUND'] = 'bulundu:';
$lang['tr_TR']['GenericDataAdmin']['GO'] = 'Git';
$lang['tr_TR']['GenericDataAdmin']['NORESULTS'] = 'Üzgünüz, %s bulunamadı.';
$lang['tr_TR']['GenericDataAdmin']['SAVE'] = 'Kaydet';
$lang['tr_TR']['GenericDataAdmin']['SAVED'] = 'Kaydedildi';
$lang['tr_TR']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Listeleme Ekle';
$lang['tr_TR']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Listelerde Ara';
$lang['tr_TR']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Arama Sonuçları';
$lang['tr_TR']['GenericDataAdmin_right.ss']['WELCOME1'] = 'Hoşgeldiniz, ';
$lang['tr_TR']['GenericDataAdmin_right.ss']['WELCOME2'] = 'Lütfen sol panodaki maddelerden birini seciniz.';
$lang['tr_TR']['ImageEditor.ss']['ACTIONS'] = 'eylemler';
$lang['tr_TR']['ImageEditor.ss']['APPLY'] = 'uygula';
$lang['tr_TR']['ImageEditor.ss']['CANCEL'] = 'iptal';
$lang['tr_TR']['ImageEditor.ss']['CROP'] = 'kırp';
$lang['tr_TR']['ImageEditor.ss']['CURRENTACTION'] = 'aktif&nbsp;eylem';
$lang['tr_TR']['ImageEditor.ss']['EDITFUNCTIONS'] = 'fonksiyonları&nbsp;düzenle';
$lang['tr_TR']['ImageEditor.ss']['EXIT'] = 'çık';
$lang['tr_TR']['ImageEditor.ss']['HEIGHT'] = 'yükseklik';
$lang['tr_TR']['ImageEditor.ss']['REDO'] = 'tekrarla';
$lang['tr_TR']['ImageEditor.ss']['ROT'] = 'döndür';
$lang['tr_TR']['ImageEditor.ss']['SAVE'] = 'resmi&nbsp;kaydet';
$lang['tr_TR']['ImageEditor.ss']['UNDO'] = 'geri al';
$lang['tr_TR']['ImageEditor.ss']['UNTITLED'] = 'İsimsiz Sayfa';
$lang['tr_TR']['ImageEditor.ss']['WIDTH'] = 'genişlik';
$lang['tr_TR']['LeftAndMain']['CHANGEDURL'] = 'URL \'%s\' olarak değiştirildi';
$lang['tr_TR']['LeftAndMain']['COMMENTS'] = 'Yorumlar';
$lang['tr_TR']['LeftAndMain']['FILESIMAGES'] = 'Dosyalar & Resimler';
$lang['tr_TR']['LeftAndMain']['HELP'] = 'Yardım';
$lang['tr_TR']['LeftAndMain']['PAGETYPE'] = 'Sayfa tipi:';
$lang['tr_TR']['LeftAndMain']['PERMAGAIN'] = 'CMS yönetiminden çıkış yaptınız.  Eğer tekrar giriş yapmak isterseniz, aşağıya kullanıcı adı ve şifrenizi giriniz.';
$lang['tr_TR']['LeftAndMain']['PERMALREADY'] = 'Üzgünüm ama CMS\'in bu bölümüne erişim hakkınız yok. Başka bir kullanıcı olarak giriş yapmak istiyorsanız aşağıdan bunu yapabilirsiniz';
$lang['tr_TR']['LeftAndMain']['PERMDEFAULT'] = 'CMS erişimi için eposta adresinizi ve parolanızı giriniz..';
$lang['tr_TR']['LeftAndMain']['PLEASESAVE'] = 'Lütfen Sayfayı Kaydedin: Bu sayfa henüz kaydedilmediği için güncellenemez.';
$lang['tr_TR']['LeftAndMain']['REPORTS'] = 'Raporlar';
$lang['tr_TR']['LeftAndMain']['REQUESTERROR'] = 'İstek hatası';
$lang['tr_TR']['LeftAndMain']['SAVED'] = 'kaydedildi';
$lang['tr_TR']['LeftAndMain']['SAVEDUP'] = 'Kaydedildi';
$lang['tr_TR']['LeftAndMain']['SECURITY'] = 'Güvenlik';
$lang['tr_TR']['LeftAndMain']['SITECONTENT'] = 'Site İçeriği';
$lang['tr_TR']['LeftAndMain']['SITECONTENTLEFT'] = 'Site İçeriği';
$lang['tr_TR']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'Bu anda çalışmakta olan sürüm';
$lang['tr_TR']['LeftAndMain.ss']['APPVERSIONTEXT2'] = ', teknik olarak CVS\'deki son sürümdür';
$lang['tr_TR']['LeftAndMain.ss']['ARCHS'] = 'Arşivlenmiş Site';
$lang['tr_TR']['LeftAndMain.ss']['DRAFTS'] = 'Taslak Site';
$lang['tr_TR']['LeftAndMain.ss']['EDIT'] = 'Düzenle';
$lang['tr_TR']['LeftAndMain.ss']['EDITINCMS'] = 'Bu sayfayı İÇY içerisinde düzenle';
$lang['tr_TR']['LeftAndMain.ss']['EDITPROFILE'] = 'Profil';
$lang['tr_TR']['LeftAndMain.ss']['LOADING'] = 'Yükleniyor...';
$lang['tr_TR']['LeftAndMain.ss']['LOGGEDINAS'] = 'Giriş yapan kullanıcı';
$lang['tr_TR']['LeftAndMain.ss']['LOGOUT'] = 'Çıkış';
$lang['tr_TR']['LeftAndMain.ss']['PUBLIS'] = 'Yayınlanmış Site';
$lang['tr_TR']['LeftAndMain.ss']['SSWEB'] = 'Silverstripe Websitesi';
$lang['tr_TR']['LeftAndMain.ss']['SWITCHTO'] = 'Şuna değiştir:';
$lang['tr_TR']['LeftAndMain.ss']['VIEWINDRAFT'] = 'Sayfayı Taslak Sitede görüntüle';
$lang['tr_TR']['LeftAndMain.ss']['VIEWINPUBLISHED'] = 'Sayfayı Yayındaki Sitede görüntüle';
$lang['tr_TR']['LeftAndMain.ss']['VIEWPAGEIN'] = 'Sayfa görünümü:';
$lang['tr_TR']['LeftAndMain']['STATUSTO'] = 'Durum \'%s\' olarak değiştirildi';
$lang['tr_TR']['LeftAndMain']['TREESITECONTENT'] = 'Site İçeriği';
$lang['tr_TR']['MemberList']['ADD'] = 'Ekle';
$lang['tr_TR']['MemberList']['ANYGROUP'] = 'Herhangi bir grup';
$lang['tr_TR']['MemberList']['ASC'] = 'Artan';
$lang['tr_TR']['MemberList']['DESC'] = 'Azalan';
$lang['tr_TR']['MemberList']['EMAIL'] = 'Eposta';
$lang['tr_TR']['MemberList']['FILTERBYG'] = 'Gruba göre filtrele';
$lang['tr_TR']['MemberList']['FN'] = 'Ad';
$lang['tr_TR']['MemberList']['ORDERBY'] = '\'a göre sırala';
$lang['tr_TR']['MemberList']['PASSWD'] = 'Şifre';
$lang['tr_TR']['MemberList']['SEARCH'] = 'Ara';
$lang['tr_TR']['MemberList']['SN'] = 'Soyisim';
$lang['tr_TR']['MemberList.ss']['FILTER'] = 'Filtre';
$lang['tr_TR']['MemberList_PageControls.ss']['DISPLAYING'] = 'Görüntüleniyor';
$lang['tr_TR']['MemberList_PageControls.ss']['FIRSTMEMBERS'] = 'üyeler';
$lang['tr_TR']['MemberList_PageControls.ss']['LASTMEMBERS'] = 'üyeler';
$lang['tr_TR']['MemberList_PageControls.ss']['NEXTMEMBERS'] = 'üyeler';
$lang['tr_TR']['MemberList_PageControls.ss']['OF'] = '\'nın';
$lang['tr_TR']['MemberList_PageControls.ss']['PREVIOUSMEMBERS'] = 'üyeler';
$lang['tr_TR']['MemberList_PageControls.ss']['TO'] = '\'a';
$lang['tr_TR']['MemberList_PageControls.ss']['VIEWFIRST'] = 'İlkini göster';
$lang['tr_TR']['MemberList_PageControls.ss']['VIEWLAST'] = 'Sonuncuyu göster';
$lang['tr_TR']['MemberList_PageControls.ss']['VIEWNEXT'] = 'Sonrakini göster';
$lang['tr_TR']['MemberList_PageControls.ss']['VIEWPREVIOUS'] = 'Öncekini göster';
$lang['tr_TR']['MemberList_Table.ss']['EMAIL'] = 'Eposta Adresi';
$lang['tr_TR']['MemberList_Table.ss']['FN'] = 'İsim';
$lang['tr_TR']['MemberList_Table.ss']['PASSWD'] = 'Şifre';
$lang['tr_TR']['MemberList_Table.ss']['SN'] = 'Soyisim';
$lang['tr_TR']['MemberTableField']['ADD'] = 'Ekle';
$lang['tr_TR']['MemberTableField']['ADDEDTOGROUP'] = 'Üye gruba eklendi';
$lang['tr_TR']['MemberTableField']['ADDINGFIELD'] = 'Ekleme başarısız';
$lang['tr_TR']['MemberTableField']['ANYGROUP'] = 'Herhangi bir grup';
$lang['tr_TR']['MemberTableField']['ASC'] = 'Artan';
$lang['tr_TR']['MemberTableField']['DESC'] = 'Azalan';
$lang['tr_TR']['MemberTableField']['EMAIL'] = 'E-posta';
$lang['tr_TR']['MemberTableField']['FILTER'] = 'Filtre';
$lang['tr_TR']['MemberTableField']['FILTERBYGROUP'] = 'Grupa göre filtrele';
$lang['tr_TR']['MemberTableField']['FIRSTNAME'] = 'Adı';
$lang['tr_TR']['MemberTableField']['ORDERBY'] = 'Sırala';
$lang['tr_TR']['MemberTableField']['SEARCH'] = 'Ara';
$lang['tr_TR']['MemberTableField.ss']['ADDNEW'] = 'Yeni ekle';
$lang['tr_TR']['MemberTableField.ss']['DELETEMEMBER'] = 'Bu üyeyi sil';
$lang['tr_TR']['MemberTableField.ss']['EDITMEMBER'] = 'Bu üyeyi düzenle';
$lang['tr_TR']['MemberTableField.ss']['SHOWMEMBER'] = 'Bu üyeyi göster';
$lang['tr_TR']['MemberTableField']['SURNAME'] = 'Soyadı';
$lang['tr_TR']['PageComment']['COMMENTBY'] = '%s tarihinde \'%s\' tarafından yorum yapıldı';
$lang['tr_TR']['PageCommentInterface']['POST'] = 'Gönder';
$lang['tr_TR']['PageCommentInterface']['SPAMQUESTION'] = 'Spam koruma sorusu: %s';
$lang['tr_TR']['PageCommentInterface.ss']['COMMENTS'] = 'Yorumlar';
$lang['tr_TR']['PageCommentInterface.ss']['NEXT'] = 'sonraki';
$lang['tr_TR']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'Bu sayfa için henüz yorum yapılmamış';
$lang['tr_TR']['PageCommentInterface.ss']['POSTCOM'] = 'Yorum ekle';
$lang['tr_TR']['PageCommentInterface.ss']['PREV'] = 'önceki';
$lang['tr_TR']['PageCommentInterface.ss']['RSSFEEDCOMMENTS'] = 'BU sayfadaki yorumlar için RSS';
$lang['tr_TR']['PageCommentInterface']['YOURCOMMENT'] = 'Yorumlar';
$lang['tr_TR']['PageCommentInterface']['YOURNAME'] = 'Adınız';
$lang['tr_TR']['PageCommentInterface_Controller']['SPAMQUESTION'] = 'Spam koruma sorusu: %s';
$lang['tr_TR']['PageCommentInterface_Form']['AWAITINGMODERATION'] = 'Yorumunuz gönderildi ve şimdi onay bekliyor.';
$lang['tr_TR']['PageCommentInterface_Form']['MSGYOUPOSTED'] = 'Gönderdiğiniz mesaj:';
$lang['tr_TR']['PageCommentInterface_Form']['SPAMDETECTED'] = 'Spam bulundu!!';
$lang['tr_TR']['PageCommentInterface_singlecomment.ss']['APPROVE'] = 'bu yorumu onayla';
$lang['tr_TR']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'bu yorum spam değildir';
$lang['tr_TR']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'bu yorum spam\'dir.';
$lang['tr_TR']['PageCommentInterface_singlecomment.ss']['PBY'] = 'Gönderen: ';
$lang['tr_TR']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'bu yorumu sil';
$lang['tr_TR']['ReportAdmin_left.ss']['REPORTS'] = 'Raporlar';
$lang['tr_TR']['ReportAdmin_right.ss']['WELCOME1'] = 'Hoşgeldiniz Bulunduğunuz yer: ';
$lang['tr_TR']['ReportAdmin_right.ss']['WELCOME2'] = 'Raporlama paneli.  Lütfen sol kısımdan bir rapor seçiniz.';
$lang['tr_TR']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'Raporlar';
$lang['tr_TR']['SecurityAdmin']['ADDMEMBER'] = 'Yeni Üye Ekle';
$lang['tr_TR']['SecurityAdmin']['ADVANCEDONLY'] = 'Bu kısım ileri düzey kullanıcılar içindir. Daha fazla bilgi için lütfen <a href="http://doc.silverstripe.com/doku.php?id=permissions:codes" target="_blank">bu sayfaya</a> bakınız.';
$lang['tr_TR']['SecurityAdmin']['EDITPERMISSIONS'] = 'Herbir gruptaki izinleri ve IP adreslerini düzenle';
$lang['tr_TR']['SecurityAdmin']['NEWGROUP'] = 'Yeni Grup';
$lang['tr_TR']['SecurityAdmin']['SAVE'] = 'Kaydet';
$lang['tr_TR']['SecurityAdmin']['SGROUPS'] = 'Güvenlik grupları';
$lang['tr_TR']['SecurityAdmin_left.ss']['CREATE'] = 'Yeni Oluştur';
$lang['tr_TR']['SecurityAdmin_left.ss']['DEL'] = 'Sil';
$lang['tr_TR']['SecurityAdmin_left.ss']['DELGROUPS'] = 'Seçili grupları sil';
$lang['tr_TR']['SecurityAdmin_left.ss']['ENABLEDRAGGING'] = 'Sürükle &amp; bırak düzenlemesine izin ver';
$lang['tr_TR']['SecurityAdmin_left.ss']['GO'] = 'Git';
$lang['tr_TR']['SecurityAdmin_left.ss']['SECGROUPS'] = 'Güvenlik Grupları';
$lang['tr_TR']['SecurityAdmin_left.ss']['SELECT'] = 'Silmek istediğiniz sayfaları seçip, aşağıdaki butona basınız';
$lang['tr_TR']['SecurityAdmin_left.ss']['TOREORG'] = 'Sitenizi düzenlemek için, sayfaları istediğiniz yerlere sürükleyip bırakabilirsiniz.';
$lang['tr_TR']['SecurityAdmin_right.ss']['WELCOME1'] = 'Hoşgeldiniz Bulunduğunuz yer: ';
$lang['tr_TR']['SecurityAdmin_right.ss']['WELCOME2'] = 'Güvenlik yönetim paneli.  Lütfen sol taraftan bir grup seçiniz.';
$lang['tr_TR']['SideReport']['EMPTYPAGES'] = 'Boş sayfalar';
$lang['tr_TR']['SideReport']['LAST2WEEKS'] = 'Son 2 haftada değiştirilmiş sayfalar';
$lang['tr_TR']['SideReport']['REPEMPTY'] = '%s raporu boş.';
$lang['tr_TR']['SideReport']['TODO'] = 'Yapılacaklar';
$lang['tr_TR']['StaticExporter']['BASEURL'] = 'Ana URL';
$lang['tr_TR']['StaticExporter']['EXPORTTO'] = 'Bu dosyaya dışa aktar';
$lang['tr_TR']['StaticExporter']['FOLDEREXPORT'] = 'Kaydedilecek klasör';
$lang['tr_TR']['StaticExporter']['NAME'] = 'Statik Dosya Olarak Dışa Aktarma';
$lang['tr_TR']['StaticExporter']['ONETHATEXISTS'] = 'Lütfen geçerli bir klasör belirtiniz';
$lang['tr_TR']['SubmittedFormEmail.ss']['SUBMITTED'] = 'Bu içerik, websitesine yollanmıştır:';
$lang['tr_TR']['TaskList.ss']['BY'] = 'tarafından';
$lang['tr_TR']['ThumbnailStripField']['NOIMAGESFOUND'] = 'Resim bulunamadı:';
$lang['tr_TR']['ThumbnailStripField']['NOTAFOLDER'] = 'Bu klasör geçerli değil';
$lang['tr_TR']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(Yukarıdan bir klasör seçiniz)';
$lang['tr_TR']['UserDefinedForm']['FORM'] = 'Form';
$lang['tr_TR']['UserDefinedForm']['NORESULTS'] = 'Herhangi bir sonuç bulunamadı';
$lang['tr_TR']['UserDefinedForm']['ONCOMPLETE'] = 'Tamamlanınca';
$lang['tr_TR']['UserDefinedForm']['ONCOMPLETELABEL'] = 'Tamamlanınca görüntüle';
$lang['tr_TR']['UserDefinedForm']['RECEIVED'] = 'Alınan Gönderiler';
$lang['tr_TR']['UserDefinedForm']['SUBMISSIONS'] = 'Gönderiler';
$lang['tr_TR']['UserDefinedForm']['SUBMIT'] = 'Gönder';
$lang['tr_TR']['UserDefinedForm']['TEXTONSUBMIT'] = 'Gönder düğmesi üzerindeki yazı:';
$lang['tr_TR']['UserDefinedForm_SubmittedFormEmail']['EMAILSUBJECT'] = 'Form gönderimi';
$lang['tr_TR']['ViewArchivedEmail.ss']['CANACCESS'] = 'Arşivdeki siteye şu bağlantıdan erişebilirsiniz:';
$lang['tr_TR']['ViewArchivedEmail.ss']['HAVEASKED'] = 'Şu tarihe kadar site üzerindeki içerik:';
$lang['tr_TR']['WaitingOn.ss']['ATO'] = 'atanan:';
$lang['tr_TR']['WidgetAreaEditor.ss']['AVAILABLE'] = 'Mevcut Widget\'ler';
$lang['tr_TR']['WidgetAreaEditor.ss']['INUSE'] = 'Widget ler şu anda kullanımda';
$lang['tr_TR']['WidgetAreaEditor.ss']['NOAVAIL'] = 'Şu anda herhangi bir widget mevcut değil.';
$lang['tr_TR']['WidgetAreaEditor.ss']['TOADD'] = 'Widget ları eklemek için, sol taraftan bu alana sürükleyiniz';
$lang['tr_TR']['WidgetEditor.ss']['DELETE'] = 'Sil';

?>