$dir = '../music/';  // 音乐文件夹的路径
$files = scandir($dir);  // 获取文件夹中的所有文件名
$supported_extensions = array('.mp3', '.wav');  // 支持的音乐文件扩展名
$music_files = array();

foreach ($files as $file) {
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));  // 获取文件扩展名
    if (in_array($ext, $supported_extensions)) {
        $music_files[] = $file;
    }
}

echo json_encode($music_files);  // 将所有音乐文件名以JSON格式返回
