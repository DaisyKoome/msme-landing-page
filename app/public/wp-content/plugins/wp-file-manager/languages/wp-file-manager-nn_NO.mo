��    �      �  �   �
      �  �   �  �   2  %   �  =     .   ?  %   n  �   �  �   ~  a   *  G   �  J   �  I     %  i  �   �  �   +  A   �  ;   $  <   `  5   �  ;   �  G     <   W  0   �  =   �  ;     <   ?  ;   |  <   �     �     �  �     �   �  7   8  7   p  /   �  ,   �  -        3     D  
   P     [     k     �     �     �     �     �          /      3     T     \     d     k     ~     �     �     �     �     �     �     �  &        2     :     C     J     S     h     o     �  #   �     �     �  %   �     �               8      Q  @   r  �   �     m     �     �     �     �  �   �     H      U      l      }      �      �   	   �   .   �      �      �      	!     !!  	   >!     H!     W!     f!  P   l!  Q   �!     "     "  6   "     L"  $   h"     �"     �"     �"     �"     �"     �"  Q   	#     [#     c#  %   �#  -   �#     �#     �#     �#      $  "   $     1$     I$     Q$     Y$  	   f$     p$  
   ~$     �$     �$     �$     �$  !   �$     �$     %     %     7%     I%  4   Z%     �%     �%  $   �%     �%     �%     �%     &     &     !&     ;&     X&     r&     �&     �&     �&     �&     �&     �&  %   '     ,'     3'     <'      L'     m'  �   �'     2(  *   J(  �  u(  �   �)  �   �*  &   Q+  A   x+  .   �+  &   �+  �   ,  �   �,  Y   �-  D   .  P   Q.  H   �.  %  �.  �   0  �   �0  M   �1  M   �1  W   &2  9   ~2  O   �2  P   3  E   Y3  2   �3  U   �3  N   (4  W   w4  M   �4  ?   5     ]5  ,   f5  �   �5  �   16  G   �6  F   %7  @   l7  9   �7  ?   �7     '8     G8     V8  %   k8  $   �8  #   �8  !   �8     �8  "   9     79     U9     t9  -   z9  	   �9  	   �9     �9     �9     �9     �9     �9  )   :     0:     <:      B:  -   c:  .   �:     �:     �:     �:     �:     �:     ;     ;     ";  &   1;     X;     j;  3   y;     �;      �;     �;     <      !<  =   B<  �   �<     ;=  %   V=     |=     �=     �=  �   �=     L>     Z>     r>     �>     �>     �>     �>  7   �>     �>     ?     &?     ??     _?     h?     z?     �?  W   �?  d   �?     R@     U@  /   X@  )   �@  )   �@     �@     �@     �@  "   A     2A     OA  L   nA     �A     �A  .   �A  *   B     <B     HB     YB     jB  !   |B  #   �B  
   �B     �B     �B  
   �B     �B  	   �B     C     C     2C  #   KC  -   oC     �C     �C     �C     �C     �C  ;   D     @D  -   GD  0   uD     �D      �D     �D     �D     �D  !   �D  (   E     AE     ^E     }E  #   �E     �E     �E     �E  .   �E  3   F     QF     ZF     bF  6   rF     �F  �   �F     rG  3   �G            E   �   �   �       �   Q   $          A       B   R          �   #   i   '   �           �          s      I      �       n   v   `          �       ~   �       	   M   �   q   �   �   �   �      @                 �   r   =   a   �   o   1   �   0       f   d   ^       z   �          (   
   ,       �       {              U   9   �   h       ]   &           .   �   �   [   S   C   �   ;   K   4   w       D   �   �   V       �       8      y   �   �       6       �   �   c   u   |   _          t   �   W   Z       X       T          !   x   p       �   N   b   �          2       5              �   �   �                 �   /   \   Y   �       }   O       J   l      )   ?           +       �         >   3   �   7   %   m   <           �           j                 �   e       �   H   g           F   k   P              G       �      :   -   �   *      "              L               ->  It will ban particular users by just putting their ids seprated by commas(,). If user is Ban then they will not able to access wp file manager on front end. -> * for all operations and to allow some operation you can mention operation name as like, allowed_operations="upload,download". Note: seprated by comma(,). Default: * -> File Manager Theme. Default: Light -> File Modified or Create date format. Default: d M, Y h:i A -> File manager Language. Default: English(en) -> Filemanager UI View. Default: grid -> Here "test" is the name of folder which is located on root directory, or you can give path for sub folders as like "wp-content/plugins". If leave blank or empty it will access all folders on root directory. Default: Root directory -> It will allow all roles to access file manager on front end or You can simple use for particular user roles as like allowed_roles="editor,author" (seprated by comma(,)) -> It will lock mentioned in commas. you can lock more as like ".php,.css,.js" etc. Default: Null -> for access to read files permission, note: true/false, default: true -> for access to write files permissions, note: true/false, default: false -> it will hide mentioned here. Note: seprated by comma(,). Default: Null <code>[wp_file_manager view="list" lang="en" theme="light" dateformat="d M, Y h:i A" allowed_roles="editor,author" access_folder="wp-content/plugins" write = "true" read = "false" hide_files = "kumar,abc.php" lock_extensions=".php,.css" allowed_operations="upload,download" ban_user_ids="2,3"] <code>[wp_file_manager]</code> -> It will show file manager on front end. But only Administrator can access it and will control from file manager settings. <code>[wp_file_manager_admin]</code> -> It will show file manager on front end. You can control all settings from file manager settings. It will work same as backend WP File Manager. <span class="fm_console_error">Nothing selected for backup</span> <span class="fm_console_error">Others backup failed.</span> <span class="fm_console_error">Plugins backup failed.</span> <span class="fm_console_error">Security Issue.</span> <span class="fm_console_error">Themes backup failed.</span> <span class="fm_console_error">Unable to create database backup.</span> <span class="fm_console_error">Uploads backup failed.</span> <span class="fm_console_success">All Done</span> <span class="fm_console_success">Database backup done.</span> <span class="fm_console_success">Others backup done.</span> <span class="fm_console_success">Plugins backup done.</span> <span class="fm_console_success">Themes backup done.</span> <span class="fm_console_success">Uploads backup done.</span> Action Actions upon selected backup(s) Admin can restrict actions of any user. Also hide files and folders and can set different - different folders paths for different users. Admin can restrict actions of any userrole. Also hide files and folders and can set different - different folders paths for different users roles. After enable trash, your files will go to trash folder. After enabling this all files will go to media library. Are you sure want to remove selected backup(s)? Are you sure you want to delete this backup? Are you sure you want to restore this backup? Backup / Restore Backup Date Backup Now Backup Options: Backup data (click to download) Backup files will be under Backup is running, please wait Backup not found! Backup removed successfully! Backup successfully deleted. Backups removed successfully! Ban Browser and OS (HTTP_USER_AGENT) Buy PRO Buy Pro Cancel Change Theme Here: Code-editor View Confirm Copy files or folders Currently no backup(s) found. DELETE FILES Dark Database Backup Database backup done on date  Database backup restored successfully. Default Default: Delete Deselect Dismiss this notice. Donate Download Files Logs Download files Duplicate or clone a folder or file Edit Files Logs Edit a file Enable Files Upload to Media Library? Enable Trash? Existing Backup(s) Extract archive or zipped file File Manager - Shortcode File Manager - System Properties File Manager Root Path, you can change according to your choice. File Manager has a code editor with multiple themes. You can select any theme for code editor. It will display when you edit any file. Also you can allow fullscreen mode of code editor. File Operations List: File doesn't exist to download. Files Backup Gray Help Here admin can give access to user roles to use filemanager. Admin can set Default Access Folder and also control upload size of filemanager. Info of file Invalid Security Code. Last Log Message Light Logs Make directory or folder Make file Maximum file upload size (upload_max_filesize) Memory Limit (memory_limit) Missing backup id. Missing parameter type. Missing required parameters. No Thanks No log message No logs found! Note: Note: These are demo screenshots. Please buy File Manager pro to Logs functions. Note: This is just a demo screenshot. To get settings please buy our pro version. OK Ok Others (Any other directories found inside wp-content) Others backup done on date  Others backup restored successfully. PHP version Parameters: Paste a file or folder Please Enter Email Address. Please Enter First Name. Please Enter Last Name. Please change this carefully, wrong path can lead file manager plugin to go down. Plugins Plugins backup done on date  Plugins backup restored successfully. Post maximum file upload size (post_max_size) Preferences Privacy Policy Public Root Path RESTORE FILES Remove or delete files and folders Rename a file or folder Restore SUCCESS Save Changes Saving... Search things Select All Settings Settings - Code-editor Settings - General Settings - User Restrictions Settings - User Role Restrictions Settings saved. Shortcode - PRO Simple cut a file or folder System Properties Terms of Service The backup apparently succeeded and is now complete. Themes Themes backup done on date  Themes backup restored successfully. Time now Timeout (max_execution_time) To make a archive or zip Today USE: Unable to removed backup! Unable to restore DB backup. Unable to restore others. Unable to restore plugins. Unable to restore themes. Unable to restore uploads. Upload Files Logs Upload files Uploads Uploads backup done on date  Uploads backup restored successfully. Verify View Log WP File Manager WP File Manager - Backup/Restore WP File Manager Contribution We love making new friends! Subscribe below and we promise to
    keep you up-to-date with our latest new plugins, updates,
    awesome deals and a few special offers. Welcome to File Manager You have not made any changes to be saved. Project-Id-Version: Theme Editor Pro
PO-Revision-Date: 2021-07-16 16:44+0530
Last-Translator: 
Language-Team: 
Language: nn_NO
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
X-Generator: Poedit 2.4.3
X-Poedit-Basepath: ..
Plural-Forms: nplurals=2; plural=(n != 1);
X-Poedit-KeywordsList: __;_e;esc_attr__;esc_html__
X-Poedit-SearchPath-0: .
 ->  Det vil forby bestemte brukere ved å bare sette ID-ene deres adskilt med komma (,). Hvis brukeren er Ban, vil de ikke få tilgang til wp-filbehandling på frontend. -> * for alle operasjoner og for å tillate noen operasjoner kan du nevne operasjonsnavnet som, allowed_operations = "upload,download". Merk: skilles med komma (,). Standard: * -> Filbehandlingstema. Standard: Light -> Filmodifisert eller Opprett datoformat. Standard: d M, Y h:i A -> Filbehandling språk. Standard: English(en) -> Filemanager UI View. Standard: grid -> Her er "test" navnet på mappen som ligger i rotkatalogen, eller du kan gi banen til undermapper som "wp-content / plugins". Hvis den er tom eller tom, får den tilgang til alle mappene i rotkatalogen. Misligholde: Root directory -> Det vil gi alle roller tilgang til filbehandling på frontend, eller du kan enkelt bruke for bestemte brukerroller som lignende allowed_roles="editor,author" (skilles med komma (,)) -> Det låses nevnt i kommaer. du kan låse mer som ".php, .css, .js" osv. Standard: null -> for tilgang til lesetillatelser, merk: true/false, standard: true -> for tilgang til å skrive filtillatelser, merk: true / false, standard: false -> det vil skjule nevnt her. Merk: skilles med komma (,). Standard: Null <code>[wp_file_manager view="list" lang="en" theme="light" dateformat="d M, Y h:i A" allowed_roles="editor,author" access_folder="wp-content/plugins" write = "true" read = "false" hide_files = "kumar,abc.php" lock_extensions=".php,.css" allowed_operations="upload,download" ban_user_ids="2,3"] <code> [wp_file_manager] </code> -> Det viser filbehandling på frontend. Men bare administrator har tilgang til den og vil kontrollere fra filbehandlinginnstillinger. <code> [wp_file_manager_admin] </code> -> Det viser filbehandling på frontend. Du kan kontrollere alle innstillingene fra filbehandlerinnstillingene. Det fungerer på samme måte som backend WP File Manager. <span class="fm_console_error">Ingenting valgt for sikkerhetskopiering</span> <span class="fm_console_error">Andre sikkerhetskopieringer mislyktes. </span> <span class="fm_console_error">Sikkerhetskopiering av programtillegg mislyktes. </span> <span class="fm_console_error">Sikkerhetsproblem. </span> <span class="fm_console_error">Sikkerhetskopiering av temaer mislyktes. </span> <span class="fm_console_error">Kan ikke opprette databasesikkerhetskopi. </span> <span class="fm_console_error">Sikkerhetskopiering mislyktes. </span> <span class="fm_console_success">Alt gjort </span> <span class="fm_console_success">Sikkerhetskopiering av databasen er utført. </span> <span class="fm_console_success">Andre sikkerhetskopieringer er gjort. </span> <span class="fm_console_success">Sikkerhetskopiering av programtillegg utført. </span> <span class="fm_console_success">Sikkerhetskopiering av temaer gjort. </span> <span class="fm_console_success">Opplastingen er gjort. </span> Handling Handlinger ved valgt (e) sikkerhetskopi (er) Administrator kan begrense alle brukeres handlinger. Skjul også filer og mapper og kan angi forskjellige - forskjellige mappestier for forskjellige brukere. Administrator kan begrense handlingene til enhver brukerroll. Skjul også filer og mapper og kan angi forskjellige - forskjellige mappestier for forskjellige brukerroller. Etter at du har aktivert papirkurven, går filene dine til papirkurven. Etter at du har aktivert dette, går alle filene til mediebiblioteket. Er du sikker på at du vil fjerne valgt (e) sikkerhetskopi (er)? Er du sikker på at du vil slette denne sikkerhetskopien? Er du sikker på at du vil gjenopprette denne sikkerhetskopien? Gjenopprette fra sikkerhetskopi Sikkerhetsdato Sikkerhetskopier nå Alternativer for sikkerhetskopiering: Backup data (klikk for å laste ned) Sikkerhetskopifiler vil være under Sikkerhetskopiering kjører, vent Backup ble ikke funnet! Sikkerhetskopieringen ble fjernet! Sikkerhetskopien ble slettet. Sikkerhetskopieringer fjernet! forby Nettleser og operativsystem (HTTP_USER_AGENT) Kjøp PRO Kjøp Pro Avbryt Endre tema her: Kode-editor Vis Bekrefte Kopier filer eller mapper Foreløpig ingen sikkerhetskopier funnet. SLETT FILER Mørk Sikkerhetskopiering av databasen Databasesikkerhetskopiering utført på dato  Databasesikkerhetskopiering ble gjenopprettet. Misligholde Misligholde: Slett Fjern markeringen Avvis denne meldingen. Donere Last ned fillogger Last ned filer Dupliser eller klon en mappe eller fil Rediger fillogger Rediger en fil Aktivere filer som lastes opp til mediebiblioteket? Vil du aktivere papirkurven? Eksisterende sikkerhetskopi (er) Pakk ut arkiv eller zip-fil Filbehandling - Kort kode Filbehandling - Systemegenskaper File Manager Root Path, du kan endre i henhold til ditt valg. File Manager har en kodeditor med flere temaer. Du kan velge hvilket som helst tema for kodeditor. Den vises når du redigerer en fil. Du kan også tillate fullskjermmodus for kodeditor. Liste over filoperasjoner: Filen eksisterer ikke for nedlasting. Backup av filer Grå Hjelp Her kan admin gi tilgang til brukerroller for å bruke filmanager. Administrator kan angi standard tilgangsmappe og også kontrollere opplastingsstørrelsen på filadministratoren. Info om filen Ugyldig sikkerhetskode. Siste loggmelding Lys Tømmerstokker Lag katalog eller mappe Lag fil Maksimal filopplastingsstørrelse (upload_max_filesize) Memory Limit (memory_limit) Mangler sikkerhetskopi-ID. Manglende parametertype. Mangler nødvendige parametere. Nei takk Ingen loggmelding Ingen logger funnet! Merk: Merk: Dette er demo-skjermbilder. Vennligst kjøp File Manager pro til Logs-funksjoner. Merk: Dette er bare et demo-skjermbilde. For å få innstillinger, vennligst kjøp vår pro-versjon. OK Ok Andre (andre kataloger som finnes i wp-innhold) Andre sikkerhetskopier er gjort på dato  Andre sikkerhetskopier ble gjenopprettet. PHP-versjon Parametere: Lim inn en fil eller mappe Vennligst skriv inn e-postadresse. Vennligst skriv inn fornavn. Vennligst skriv inn etternavn. Endre dette nøye, feil bane kan føre til at filbehandling plugin går ned. Plugins Plugins backup gjort på dato  Plugins-sikkerhetskopiering ble gjenopprettet. Legg ut maks filstørrelse (post_max_size) Preferanser Personvernregler Offentlig rotsti GJENBESTILL FILER Fjern eller slett filer og mapper Gi nytt navn til en fil eller mappe Restaurere SUKSESS Lagre endringer Lagrer ... Søk på ting Velg alle Innstillinger Innstillinger - Kode-editor Innstillinger - Generelt Innstillinger - Brukerbegrensninger Innstillinger - Begrensninger for brukerrolle Instillinger lagret. Kortkode - PRO Enkelt kutte en fil eller mappe System egenskaper Vilkår for bruk Sikkerhetskopien lyktes tilsynelatende og er nå fullført. Temaer Sikkerhetskopiering av temaer gjort på dato  Sikkerhetskopiering av temaer ble gjenopprettet. Tid nå Tidsavbrudd (max_execution_time) Å lage et arkiv eller zip I dag BRUK: Kan ikke fjerne sikkerhetskopien! Kan ikke gjenopprette DB-sikkerhetskopi. Kan ikke gjenopprette andre. Kan ikke gjenopprette plugins. Kan ikke gjenopprette temaer. Kan ikke gjenopprette opplastinger. Last opp fillogger Last opp filer Opplastinger Laster opp sikkerhetskopiering gjort på dato  Opplastingen av sikkerhetskopien ble gjenopprettet. Bekrefte Se Logg WP File Manager WP File Manager - Sikkerhetskopiering / gjenoppretting WP File Manager-bidrag Vi elsker å få nye venner! Abonner nedenfor, og vi lover å
    holde deg oppdatert med de nyeste nye plugins, oppdateringer,
    fantastiske tilbud og noen få spesialtilbud. Velkommen til File Manager Du har ikke gjort noen endringer for å bli lagret. 