#!/bin/bash
# init
function pause(){
   read -p "$*"
}
 
# ...
# call it
pause 'Press [Enter] key to continue...'
# rest of the script
# ...
 
