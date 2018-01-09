echo hostname>%username%.txt
hostname>>%username%.txt
ipconfig | findstr "IPv4">>%username%.txt
echo Username>>%username%.txt
whoami >>%username%.txt
systeminfo | findstr /c:"OS\ Name">>%username%.txt
systeminfo | findstr /c:"System\ Manufacturer">>%username%.txt
systeminfo | findstr /c:"System\ Model">>%username%.txt
systeminfo | findstr /c:"System\ Type">>%username%.txt
wmic /append:%username%.txt bios get serialnumber /FORMAT:list
#echo "<pre> CPU Info </pre>" >>%username%.txt 
echo CPU Info >>%username%.txt
wmic /append:%username%.txt cpu get manufacturer, name, NumberOfCores, status, processorid /FORMAT:list
wmic /append:%username%.txt cpu get manufacturer, name, NumberOfCores, status, SerialNumber /FORMAT:list
echo RAM Info >>%username%.txt
wmic /append:%username%.txt memorychip get capacity, manufacturer, SerialNumber, speed /FORMAT:list
echo RAM can be upgrade upto >>%username%.txt
wmic /append:%username%.txt memphysical get maxcapacity
echo Disk HDD Info >>%username%.txt
wmic /append:%username%.txt diskdrive get size, model, SerialNumber /FORMAT:list
wmic /append:%username%.txt logicaldisk get name, freespace, size /FORMAT:list
echo >>%username%.txt
wmic /append:%username%.txt share list brief
#whoami >>%username%.txt
