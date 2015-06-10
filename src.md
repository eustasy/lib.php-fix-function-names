# http://php.net/manual/en/book.bc.php
bc_add ← bcadd
bc_comp ← bccomp
bc_div ← bcdiv
bc_mod ← bcmod
bc_mul ← bcmul
bc_pow ← bcpow
bc_pow_mod ← bcpowmod
bc_scale ← bcscale
bc_sqrt ← bcsqrt
bc_sub ← bcsub

# http://php.net/manual/en/book.gettext.php
gettext_bind_text_domain_codeset ← bind_textdomain_codeset
gettext_bind_text_domain ← bindtextdomain
gettext_dc ← dcgettext
gettext_dcn ← dcngettext
gettext_d ← dgettext
gettext_dn ← dngettext
gettext_n ← ngettext
gettext_text_domain ← textdomain

# http://php.net/manual/en/book.bzip2.php
bz_close ← bzclose
bz_compress ← bzcompress
bz_decompress ← bzdecompress
bz_errno ← bzerrno
bz_error ← bzerror
bz_errstr ← bzerrstr
bz_flush ← bzflush
bz_open ← bzopen
bz_read ← bzread
bz_write ← bzwrite

# http://php.net/manual/en/book.zlib.php
gz_close ← gzclose
gz_compress ← gzcompress
gz_decode ← gzdecode
gz_deflate ← gzdeflate
gz_encode ← gzencode
gz_eof ← gzeof
gz_file ← gzfile
gz_getc ← gzgetc
gz_gets ← gzgets
gz_getss ← gzgetss
gz_inflate ← gzinflate
gz_open ← gzopen
gz_passthru ← gzpassthru
gz_puts ← gzputs
gz_read ← gzread
gz_rewind ← gzrewind
gz_seek ← gzseek
gz_tell ← gztell
gz_uncompress ← gzuncompress
gz_write ← gzwrite
gz_read_file ← readgzfile

# http://php.net/manual/en/book.image.php
gd_image_size ← getimagesize
gd_image_size_from_string ← getimagesizefromstring
gd_type_to_extension ← image_type_to_extension
gd_type_to_mime_type ← image_type_to_mime_type
gd_2wbmp ← image2wbmp
gd_affine ← imageaffine
gd_affine_matrix_concat ← imageaffinematrixconcat
gd_affine_matrix_get ← imageaffinematrixget
gd_alpha_blending ← imagealphablending
gd_antialias ← imageantialias
gd_arc ← imagearc
gd_char ← imagechar
gd_charup ← imagecharup
gd_color_allocate ← imagecolorallocate
gd_color_allocate_alpha ← imagecolorallocatealpha
gd_color_at ← imagecolorat
gd_color_closest ← imagecolorclosest
gd_color_closest_alpha ← imagecolorclosestalpha
gd_color_closest_hwb ← imagecolorclosesthwb
gd_color_deallocate ← imagecolordeallocate
gd_color_exact ← imagecolorexact
gd_color_exact_alpha ← imagecolorexactalpha
gd_color_match ← imagecolormatch
gd_color_resolve ← imagecolorresolve
gd_color_resolve_alpha ← imagecolorresolvealpha
gd_color_set ← imagecolorset
gd_colors_for_index ← imagecolorsforindex
gd_colors_total ← imagecolorstotal
gd_color_transparent ← imagecolortransparent
gd_convolution ← imageconvolution
gd_copy ← imagecopy
gd_copy_merge ← imagecopymerge
gd_copy_merge_gray ← imagecopymergegray
gd_copy_resampled ← imagecopyresampled
gd_copy_resized ← imagecopyresized
gd_create ← imagecreate
gd_create_from_gd2 ← imagecreatefromgd2
gd_create_from_gd2_part ← imagecreatefromgd2part
gd_create_from_gd ← imagecreatefromgd
gd_create_from_gif ← imagecreatefromgif
gd_create_from_jpeg ← imagecreatefromjpeg
gd_create_from_png ← imagecreatefrompng
gd_create_from_string ← imagecreatefromstring
gd_create_from_wbmp ← imagecreatefromwbmp
gd_create_from_webp ← imagecreatefromwebp
gd_create_from_xbm ← imagecreatefromxbm
gd_create_from_xpm ← imagecreatefromxpm
gd_create_true_color ← imagecreatetruecolor
gd_crop ← imagecrop
gd_crop_auto ← imagecropauto
gd_dashed_line ← imagedashedline
gd_destroy ← imagedestroy
gd_ellipse ← imageellipse
gd_fill ← imagefill
gd_filled_arc ← imagefilledarc
gd_filled_ellipse ← imagefilledellipse
gd_filled_polygon ← imagefilledpolygon
gd_filled_rectangle ← imagefilledrectangle
gd_fill_to_border ← imagefilltoborder
gd_filter ← imagefilter
gd_flip ← imageflip
gd_font_height ← imagefontheight
gd_font_width ← imagefontwidth
gd_ft_bbox ← imageftbbox
gd_ft_text ← imagefttext
gd_gamma_correct ← imagegammacorrect
gd_raw2 ← imagegd2
gd_raw ← imagegd
gd_gif ← imagegif
gd_grab_screen ← imagegrabscreen
gd_grab_window ← imagegrabwindow
gd_interlace ← imageinterlace
gd_is_true_color ← imageistruecolor
gd_jpeg ← imagejpeg
gd_layer_effect ← imagelayereffect
gd_line ← imageline
gd_load_font ← imageloadfont
gd_palette_copy ← imagepalettecopy
gd_palette_to_true_color ← imagepalettetotruecolor
gd_png ← imagepng
gd_polygon ← imagepolygon
gd_ps_bbox ← imagepsbbox
gd_ps_encode_font ← imagepsencodefont
gd_ps_extend_font ← imagepsextendfont
gd_ps_free_font ← imagepsfreefont
gd_ps_load_font ← imagepsloadfont
gd_ps_slant_font ← imagepsslantfont
gd_ps_text ← imagepstext
gd_rectangle ← imagerectangle
gd_rotate ← imagerotate
gd_save_alpha ← imagesavealpha
gd_scale ← imagescale
gd_set_brush ← imagesetbrush
gd_set_interpolation ← imagesetinterpolation
gd_set_pixel ← imagesetpixel
gd_set_style ← imagesetstyle
gd_set_thickness ← imagesetthickness
gd_set_tile ← imagesettile
gd_string ← imagestring
gd_string_up ← imagestringup
gd_width ← imagesx
gd_height ← imagesy
gd_true_color_to_palette ← imagetruecolortopalette
gd_ttf_bbox ← imagettfbbox
gd_ttf_text ← imagettftext
gd_types ← imagetypes
gd_wbmp ← imagewbmp
gd_webp ← imagewebp
gd_xbm ← imagexbm
gd_iptc_embed ← iptcembed
gd_iptc_parse ← iptcparse
gd_jpeg2wbmp ← jpeg2wbmp
gd_png2wbmp ← png2wbmp

# http://php.net/manual/en/book.exif.php
exif_image_type ← exif_imagetype
exif_tag_name ← exif_tagname

# http://php.net/manual/en/book.ctype.php
# ctype modules functions are IEEE functions. Add “ctype_” prefixed IEEE aliases.
# DONE ctype_alnum ← ctype_isalnum
# DONE ctype_alpha ← ctype_isalpha
# DONE ctype_cntrl ← ctype_iscntrl
# DONE ctype_digit ← ctype_isdigit
# DONE ctype_graph ← ctype_isgraph
# DONE ctype_lower ← ctype_islower
# DONE ctype_print ← ctype_isprint
# DONE ctype_punct ← ctype_ispunct
# DONE ctype_space ← ctype_isspace
# DONE ctype_upper ← ctype_isupper
# DONE ctype_xdigit ← ctype_isxdigit

# http://php.net/manual/en/book.mbstring.php
mb_decode_mime_header ← mb_decode_mimeheader
mb_decode_numeric_entity ← mb_decode_numericentity
mb_encode_mime_header ← mb_encode_mimeheader
mb_encode_numeric_entity ← mb_encode_numericentity
mb_mail ← mb_send_mail
# (There is mail() as standard function)

# Socket Functions
# http://php.net/manual/en/book.sockets.php
# IEEE names are prefixed by “socket_”.
socket_get_peer_name ← socket_getpeername
socket_get_sock_name ← socket_getsockname
socket_recv_from ← socket_recvfrom
socket_recv_msg ← socket_recvmsg
socket_send_msg ← socket_sendmsg
socket_send_to ← socket_sendto
socket_errstr ← socket_strerror
# (need more consideration. strerror() is IEEE name Adjust to accord with other names. errstr/errno abbreviations are used by various functions/classes. e.g. bz_errstr(), MySQLi::$errno.)

# http://php.net/manual/en/book.apache.php
sapi_request_headers ← getallheaders
# (Categorized as apache function, but available for CLI and FCGI also)
apache_virtual ← virtual
apache_get_env ← apache_getenv
apache_set_env ← apache_setenv

# Date/Time Functions
# http://php.net/manual/en/book.datetime.php
# DONE date_format ← date
date_get ← getdate
date_check ← checkdate
time_part ← idate
time ← time
time_make ← mktime
time_format ← strftime
time_utc ← gmdate
time_utc_make ← gmmktime
time_utc_format ← gmstrftime
time_get ← gettimeofday
time_local ← localtime
time_micro ← microtime
time_parse ← strptime
time_from_string ← strtotime

# Directory Related Functions
# Directory related : Prefixed by “dir_” It's supposed to be named as “dir module”. Note: These functions changes “directory entry” information.
dir_rename ← rename
dir_delete ← rmdir
dir_create ← mkdir
dir_chown ← chown
dir_chmod ← chmod
dir_chgrp ← chgrp
dir_name ← dirname
dir_glob ← glob

# http://php.net/manual/en/ref.dir.php
dir_set ← chdir
dir_chroot ← chroot
dir_get ← getcwd
dir_open ← opendir
dir_close ← closedir
dir_read ← readdir
dir_rewind ← rewinddir
dir_scan ← scandir

# Function Handling Functions
# http://php.net/manual/en/ref.funchand.php - All of function handling functions are prefixed by “function_” by these.
function_declared ← get_defined_functions
function_create ← create_function
function_arg ← func_get_arg
function_args ← func_get_args
function_num_args ← func_num_args
function_call_user ← call_user_func
function_call_user_array ← call_user_func_array
function_shutdown_register ← register_shutdown_function
function_tick_register ← register_tick_function
function_tick_unregister ← unregister_tick_function
function_static_call_array ← forward_static_call_array
function_static_call ← forward_static_call

# Command Execution Functions
# http://php.net/manual/en/ref.exec.php
exec ← exec
exec_passthru ← passthru
exec_shell ← shell_exec
exec_system ← system
exec_escape_arg ← escapeshellarg
exec_escape_cmd ← escapeshellcmd

# String Related Functions
# http://php.net/ref.strings
# HTML related:
html_entities ← htmlentities
html_escape ← htmlspecialchars
html_escape_decode ← htmlspecialchars_decode
html_nl2br ← nl2br
html_strip_tags ← strip_tags
html_translation_table ← get_html_translation_table
# Locate related:
locale_conv ← localeconv
locale_set ← setlocale
locale_info ← nl_langinfo
# “string” function but no “str_” prefix
str_cslashes ← addcslashes
str_cslashes_strip ← stripcslashes
str_slashes ← addslashes
str_slashes_strip ← stripslashes
str_chop ← chop
str_count_chars ← count_chars
str_chunk_split ← chunk_split
str_explode ← explode
str_implode ← implode
str_money_format ← money_format
str_number_format ← number_format
str_levenshtein ← levenshtein
str_metaphone ← metaphone
str_parse ← parse_str
str_quote_meta ← quotemeta
str_similar_text ← similar_text
str_soundex ← soundex
str_sscanf ← sscanf
str_rtrim ← rtrim
str_trim ← trim
str_ltrim ← ltrim
str_lc_first ← lcfirst
str_uc_first ← ucfirst
str_uc_words ← ucwords
str_word_wrap ← wordwrap
# Comparison:
str_cmp ← strcmp
str_ncmp ← strncmp
str_case_cmp ← strcasecmp
str_ncase_cmp ← strncasecmp
str_nat_cmp ← strnatcmp
str_nat_case_cmp ← strnatcasecmp
# Conversion:
str_to_lower ← strtolower, tolower
str_to_upper ← strtoupper, toupper
# Misc:
str_get_csv ← str_getcsv
# Named after libc:
ord ← ord
chr ← chr
str_chr ← strchr
str_cmp ← strcmp
str_coll ← strcoll
str_cspn ← strcspn
str_ipos ← stripos
str_istr ← stristr
str_len ← strlen
str_pbrk ← strpbrk
str_pos ← strpos
str_rchr ← strrchr
str_rev ← strrev
str_ripos ← strripos
str_rpos ← strrpos
str_spn ← strspn
str_str ← strstr
str_tok ← strtok
str_tr ← strtr

# http://php.net/manual/en/book.mbstring.php
# IEEE names are prefixed by “mb_”
mb_str_cut ← mb_strcut
mb_str_trim_width ← mb_strimwidth
mb_str_ipos ← mb_stripos
mb_str_istr ← mb_stristr
mb_str_len ← mb_strlen
mb_str_pos ← mb_strpos
mb_str_rchr ← mb_strrchr
mb_str_richr ← mb_strrichr
mb_str_ripos ← mb_strripos
mb_str_rpos ← mb_strrpos
mb_str_str ← mb_strstr
mb_str_to_lower ← mb_strtolower, mb_tolower
mb_str_to_upper ← mb_strtoupper, mb_toupper
mb_str_width ← mb_strwidth

# http://php.net/manual/en/book.iconv.php
# IEEE names are prefixed by “iconv_”
iconv_str_len ← iconv_strlen
iconv_str_pos ← iconv_strpos
iconv_str_rpos ← iconv_strrpos

# http://php.net/manual/en/book.intl.php
# IEEE names are prefixed by “grapheme_”
grapheme_str_ipos ← grapheme_stripos
grapheme_str_istr ← grapheme_stristr
grapheme_str_len ← grapheme_strlen
grapheme_str_pos ← grapheme_strpos
grapheme_str_ripos ← grapheme_strripos
grapheme_str_rpos ← grapheme_strrpos
grapheme_str_str ← grapheme_strstr

# Array Related Functions
# http://php.net/manual/en/ref.array.php
array_sort ← sort
array_sort_reverse ← rsort
array_usort ← usort
array_sort_assoc ← asort
array_sort_assoc_reverse ← arsort
array_sort_uassoc ← uasort
array_sort_key ← ksort
array_sort_key_reverse ← krsort
array_sort_ukey ← uksort
array_sort_natural ← natsort
array_sort_natural_case ← natcasesort
array_in ← in_array
array_range ← range
array_shuffle ← shuffle
# Parameter ordering fix. Use the same order as IEEE str functions.
array_in ←  in_array
array_find ← mixed array_search # ( mixed $needle , array $haystack [, bool $strict ]
array_key_find ← bool array_key_exists # ( mixed $key , array $array )

# File Related Functions
# http://php.net/manual/en/ref.filesystem.php
link ← link
link_info ← linkinfo
link_stat ← lstat
link_chown ← lchown
link_chgrp ← lchgrp
link_read ← readlink
link_symbolic ← symlink
path_base_name ← basename
path_info ← pathinfo
# realpath related : Could be as it is now?
realpath ← realpath
realpath_cache_get ← realpath_cache_get
realpath_cache_size ← realpath_cache_size
# This is one of exception
file_read ← readfile
# (This could be file_read() or file_passthru(). If rename fopen()/etc with “file_” prefix, file_read() may conflict with fread() file_passthru() may conflict with fpassthru().)
pipe_close ← pclose
pipe_open ← popen
file_atime ← fileatime
file_ctime ← filectime
file_group ← filegroup
file_inode ← fileinode
file_mtime ← filemtime
file_owner ← fileowner
file_perms ← fileperms
file_size ← filesize
file_type ← filetype
file_name_match ← fnmatch
file_temp_name ← tempnam
file_copy ← copy
file_stat ← stat
file_stat_clear_cache ← clearstatcache
file_move_uploaded ← move_upload_file
file_delete ← unlink
# (There is dummy “delete()” function entry for unlink(). Unlink is a directory operation in fact, but made it as file_delete(). There will be dir_delete())
# f*() : Examples are fopen(), fread(). These functions are for file(stream) resource. “f” prefix functions are kept, there should be “ftemp(tmpfile)”,“frewind(rewind)” because these operates with file(stream) resource.
fopen ← fopen
fclose ← fclose
feof ← feof
fflush ← fflush
fgetc ← fgetc
fget_csv ← fgetcsv
fgets ← fgets
fgetss ← fgetss
fpassthru ← fpassthru
fput_csv ← fputcsv
fputs ← fputs
fread ← fread
fscanf ← fscanf
fseek ← fseek
fstat ← fstat
ftell ← ftell
ftruncate ← ftruncate
fwrite ← fwrite
frewind ← rewind
# (This one is exception that does not have “f” prefix, but operates with file handle)
ftemp ← tmpfile
# (This one is exception that does not have “f” prefix, but returns file handle)

# Other Standard Functions
# http://php.net/manual/en/book.misc.php
time_sleep ← sleep
time_nano_sleep ← time_nanosleep, nanosleep
time_micro_sleep ← usleep
time_unique_id ← uniqid
# (uniqid() is microtime() based)
sys_get_load_avg ← sys_getloadavg
php_strip_white_space ← php_strip_whitespace

# http://php.net/manual/en/book.url.php
url_decode ← urldecode
url_encode ← urlencode
url_raw_decode ← rawurldecode
url_raw_encode ← rawurlencode
url_parse ← parse_url
url_build_query ← http_build_query
url_meta_tags ← get_meta_tags
url_headers ← get_headers

# http://php.net/manual/en/ref.info.php
php_credits ← phpcredits
php_info ← phpinfo
php_version ← phpversion
get_opt ← getopt
get_env ← getenv
put_env ← putenv
# Following get_() may be prefixed by “php_” rather than “get_”.
get_last_mod ← getlastmod
get_my_gid ← getmygid
get_my_inode ← getmyinode
get_my_pid ← getmypid
get_my_uid ← getmyuid
get_rusage ← getrusage

# http://php.net/manual/en/book.var.php
bool_val ← boolval
double_val ← doubleval
float_val ← floatval
int_val ← intval
str_val ← strval
type_get ← gettype
type_set ← settype
type_resource ← get_resource_type
is_set ← isset
# (There are number of is_*(). e.g.is_int()/is_string()/etc)

# http://php.net/manual/en/book.var.php
php_defined_vars ← get_defined_vars

# http://php.net/manual/en/ref.classobj.php - Most of Class/interface/trait related functions are prefixed by “class_”/“interface_”/“trait_”.
class_called ← get_called_class
class_methods ← get_class_methods
class_vars ← get_class_vars
class_get ← get_class
class_parent ← get_parent_class
class_object_vars ← get_object_vars
class_declared ← get_declared_classes
interface_declared ← get_declared_interfaces
trait_declared ← get_declared_traits
method_exists ← method_exists
property_exists ← property_exists

# http://php.net/manual/en/book.info.php - PHP related function are prefixed by “php_”.
php_extension_loaded ← extension_loaded
php_extension_loaded_all ← get_loaded_extensions
php_extension_functions ← get_extension_funcs
php_dl ← dl
php_cfg_var ← get_cfg_var
php_current_user ← get_current_user
php_defined_constants ← get_defined_constants
php_include_path_get ← get_include_path
# (Like ini_get/set/restore(). ini_set/get/restore() can do the same. Deprecate all them? or only have php_include_path() does both get/set?)
php_include_path_set ← set_include_path
php_include_path_restore ← restore_include_path
php_included_files ← get_included_files
php_required_files ← get_required_files
php_time_limit ← set_time_limit
# (“_set” may be omitted. It changes “max_execution_time” INI. ini_set() can do the same. Deprecate?)
