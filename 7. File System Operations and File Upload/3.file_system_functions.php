<?php

// basename — Returns trailing name component of path
$filename = '/path/to/some/file.txt';
$basename = basename($filename);
echo $basename; // Outputs: file.txt

// chgrp — Changes file group
$filename = 'file.txt';
$group = 'admin';
chgrp($filename, $group);

// chmod — Changes file mode
$filename = 'file.txt';
$mode = 0644;
chmod($filename, $mode);

// chown — Changes file owner
$filename = 'file.txt';
$user = 'john';
chown($filename, $user);

// clearstatcache — Clears file status cache
clearstatcache();

// copy — Copies file
$source = 'source.txt';
$destination = 'destination.txt';
copy($source, $destination);

// delete — See unlink or unset

// dirname — Returns a parent directory's path
$filename = '/path/to/some/file.txt';
$directory = dirname($filename);
echo $directory; // Outputs: /path/to/some

// disk_free_space — Returns available space on filesystem or disk partition
$disk = '/';
$freeSpace = disk_free_space($disk);
echo $freeSpace; // Outputs available space in bytes

// disk_total_space — Returns the total size of a filesystem or disk partition
$disk = '/';
$totalSpace = disk_total_space($disk);
echo $totalSpace; // Outputs total space in bytes

// diskfreespace — Alias of disk_free_space

// fclose — Closes an open file pointer
$file = fopen('file.txt', 'r');
// Perform operations on the file
fclose($file);

// fdatasync — Synchronizes data (but not meta-data) to the file
$file = fopen('file.txt', 'a');
// Write data to the file
fdatasync($file);

// feof — Tests for end-of-file on a file pointer
$file = fopen('file.txt', 'r');
while (!feof($file)) {
    $line = fgets($file);
    echo $line;
}
fclose($file);

// fflush — Flushes the output to a file
$file = fopen('file.txt', 'a');
// Write data to the file
fflush($file);

// fgetc — Gets character from file pointer
$file = fopen('file.txt', 'r');
$char = fgetc($file);
echo $char;
fclose($file);

// fgetcsv — Gets line from file pointer and parse for CSV fields
$file = fopen('file.csv', 'r');
while (($data = fgetcsv($file)) !== false) {
    print_r($data);
}
fclose($file);

// fgets — Gets line from file pointer
$file = fopen('file.txt', 'r');
$line = fgets($file);
echo $line;
fclose($file);

// fgetss — Gets line from file pointer and strip HTML tags
$file = fopen('file.html', 'r');
$line = fgetss($file);
echo $line;
fclose($file);

// file_exists — Checks whether a file or directory exists
$filename = 'file.txt';
if (file_exists($filename)) {
    echo 'File exists';
} else {
    echo 'File does not exist';
}

// file_get_contents — Reads entire file into a string
$filename = 'file.txt';
$content = file_get_contents($filename);
echo $content;

// file_put_contents — Write data to a file
$filename = 'file.txt';
$content = 'Hello, World!';
file_put_contents($filename, $content);

// file — Reads entire file into an array
$filename = 'file.txt';
$fileLines = file($filename, FILE_IGNORE_NEW_LINES);
print_r($fileLines);

// fileatime — Gets last access time of file
$filename = 'file.txt';
$accessTime = fileatime($filename);
echo $accessTime;

// filectime — Gets inode change time of file
$filename = 'file.txt';
$changeTime = filectime($filename);
echo $changeTime;

// filegroup — Gets file group
$filename = 'file.txt';
$group = filegroup($filename);
echo $group;

// fileinode — Gets file inode
$filename = 'file.txt';
$inode = fileinode($filename);
echo $inode;

// filemtime — Gets file modification time
$filename = 'file.txt';
$modificationTime = filemtime($filename);
echo $modificationTime;

// fileowner — Gets file owner
$filename = 'file.txt';
$owner = fileowner($filename);
echo $owner;

// fileperms — Gets file permissions
$filename = 'file.txt';
$permissions = fileperms($filename);
echo $permissions;

// filesize — Gets file size
$filename = 'file.txt';
$fileSize = filesize($filename);
echo $fileSize;

// filetype — Gets file type
$filename = 'file.txt';
$fileType = filetype($filename);
echo $fileType;

// flock — Portable advisory file locking
$file = fopen('file.txt', 'a');
if (flock($file, LOCK_EX)) {
    // Perform exclusive lock operations
    flock($file, LOCK_UN); // Release the lock
}
fclose($file);

// fnmatch — Match filename against a pattern
$filename = 'file.txt';
$pattern = '*.txt';
if (fnmatch($pattern, $filename)) {
    echo 'Pattern matched';
} else {
    echo 'Pattern not matched';
}

// fopen — Opens file or URL
$file = fopen('file.txt', 'r');
// Perform operations on the file
fclose($file);

// fpassthru — Output all remaining data on a file pointer
$file = fopen('file.txt', 'r');
fpassthru($file);
fclose($file);

// fputcsv — Format line as CSV and write to file pointer
$file = fopen('file.csv', 'w');
$data = ['John Doe', 'john@example.com', 'New York'];
fputcsv($file, $data);
fclose($file);

// fputs — Alias of fwrite

// fread — Binary-safe file read
$file = fopen('file.txt', 'r');
$data = fread($file, 1024);
echo $data;
fclose($file);

// fscanf — Parses input from a file according to a format
$file = fopen('file.txt', 'r');
$data = fscanf($file, '%s %s %d');
print_r($data);
fclose($file);

// fseek — Seeks on a file pointer
$file = fopen('file.txt', 'r');
fseek($file, 10);
$data = fgets($file);
echo $data;
fclose($file);

// fstat — Gets information about a file using an open file pointer
$file = fopen('file.txt', 'r');
$fileInfo = fstat($file);
print_r($fileInfo);
fclose($file);

// fsync — Synchronizes changes to the file (including meta-data)
$file = fopen('file.txt', 'a');
// Write data to the file
fsync($file);
fclose($file);

// ftell — Returns the current position of the file read/write pointer
$file = fopen('file.txt', 'r');
$position = ftell($file);
echo $position;
fclose($file);

// ftruncate — Truncates a file to a given length
$file = fopen('file.txt', 'r+');
ftruncate($file, 0);
fclose($file);

// fwrite — Binary-safe file write
$file = fopen('file.txt', 'a');
$data = 'Hello, World!';
fwrite($file, $data);
fclose($file);

// glob — Find pathnames matching a pattern
$pattern = 'files/*.txt';
$files = glob($pattern);
print_r($files);

// is_dir — Tells whether the filename is a directory
$filename = 'directory';
if (is_dir($filename)) {
    echo 'Directory exists';
} else {
    echo 'Directory does not exist';
}

// is_executable — Tells whether the filename is executable
$filename = 'file.txt';
if (is_executable($filename)) {
    echo 'File is executable';
} else {
    echo 'File is not executable';
}

// is_file — Tells whether the filename is a regular file
$filename = 'file.txt';
if (is_file($filename)) {
    echo 'File exists';
} else {
    echo 'File does not exist';
}

// is_link — Tells whether the filename is a symbolic link
$filename = 'file.txt';
if (is_link($filename)) {
    echo 'File is a symbolic link';
} else {
    echo 'File is not a symbolic link';
}

// is_readable — Tells whether a file exists and is readable
$filename = 'file.txt';
if (is_readable($filename)) {
    echo 'File is readable';
} else {
    echo 'File is not readable';
}

// is_uploaded_file — Tells whether the file was uploaded via HTTP POST
$file = $_FILES['file'];
if (is_uploaded_file($file['tmp_name'])) {
    echo 'File was uploaded';
} else {
    echo 'File was not uploaded';
}

// is_writable — Tells whether the filename is writable
$filename = 'file.txt';
if (is_writable($filename)) {
    echo 'File is writable';
} else {
    echo 'File is not writable';
}

// is_writeable — Alias of is_writable

// lchgrp — Changes group ownership of symlink
$symlink = 'symlink.txt';
$group = 'admin';
lchgrp($symlink, $group);

// lchown — Changes user ownership of symlink
$symlink = 'symlink.txt';
$user = 'john';
lchown($symlink, $user);

// link — Create a hard link
$target = 'file.txt';
$link = 'hardlink.txt';
link($target, $link);

// linkinfo — Gets information about a link
$link = 'symlink.txt';
$info = linkinfo($link);
echo $info;

// lstat — Gives information about a file or symbolic link
$filename = 'file.txt';
$fileInfo = lstat($filename);
print_r($fileInfo);

// mkdir — Makes directory
$directory = 'new_directory';
mkdir($directory);

// move_uploaded_file — Moves an uploaded file to a new location
$file = $_FILES['file'];
$destination = 'uploads/' . $file['name'];
move_uploaded_file($file['tmp_name'], $destination);

// parse_ini_file — Parse a configuration file
$filename = 'config.ini';
$config = parse_ini_file($filename, true);
print_r($config);

// parse_ini_string — Parse a configuration string
$configString = "
[Section1]
key1 = value1
key2 = value2

[Section2]
key3 = value3
key4 = value4
";
$config = parse_ini_string($configString, true);
print_r($config);

// pathinfo — Returns information about a file path
$path = '/path/to/file.txt';
$info = pathinfo($path);
print_r($info);

// pclose — Closes process file pointer
$process = popen('ls -la', 'r');
// Perform operations on the process output
pclose($process);

// popen — Opens process file pointer
$process = popen('ls -la', 'r');
// Perform operations on the process output
pclose($process);

// readfile — Outputs a file
$filename = 'file.txt';
readfile($filename);

// readlink — Returns the target of a symbolic link
$link = 'symlink.txt';
$target = readlink($link);
echo $target;

// realpath_cache_get — Get realpath cache entries
$cacheEntries = realpath_cache_get();
print_r($cacheEntries);

// realpath_cache_size — Get realpath cache size
$cacheSize = realpath_cache_size();
echo $cacheSize;

// realpath — Returns canonicalized absolute pathname
$path = '/path/to/../file.txt';
$realpath = realpath($path);
echo $realpath;

// rename — Renames a file or directory
$oldName = 'file.txt';
$newName = 'new_file.txt';
rename($oldName, $newName);

// rewind — Rewind the position of a file pointer
$file = fopen('file.txt', 'r');
// Read data from the file
rewind($file);

// rmdir — Removes directory
$directory = 'empty_directory';
rmdir($directory);

// set_file_buffer — Alias of stream_set_write_buffer

// stat — Gives information about a file
$filename = 'file.txt';
$fileInfo = stat($filename);
print_r($fileInfo);

// symlink — Creates a symbolic link
$target = 'file.txt';
$link = 'symlink.txt';
symlink($target, $link);

// tempnam — Create file with unique file name
$directory = 'temp';
$prefix = 'file_';
$tempFile = tempnam($directory, $prefix);
echo $tempFile;

// tmpfile — Creates a temporary file
$tempFile = tmpfile();
echo $tempFile;

// touch — Sets access and modification time of file
$filename = 'file.txt';
touch($filename);

// umask — Changes the current umask
$oldUmask = umask(027);
echo $oldUmask;

// unlink — Deletes a file
$filename = 'file.txt';
unlink($filename);
?>