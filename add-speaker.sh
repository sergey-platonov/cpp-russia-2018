#!/bin/bash

function show_usage {
  echo "Usage: "
  echo "  $1 author-name [talk title]"
}

function translit() {
    local NAME=${*:-$(cat)};
    NAME=${NAME// /-}
    local TRS;
    TRS=$(sed "y/абвгдезийклмнопрстуфхцы/abvgdezijklmnoprstufxcy/" <<< "$NAME")
    TRS=$(sed "y/АБВГДЕЗИЙКЛМНОПРСТУФХЦЫ/ABVGDEZIJKLMNOPRSTUFXCY/" <<< "$TRS")
    TRS=${TRS//ч/ch};
    TRS=${TRS//Ч/ch} TRS=${TRS//ш/sh};
    TRS=${TRS//Ш/sh} TRS=${TRS//ё/jo};
    TRS=${TRS//Ё/jo} TRS=${TRS//ж/zh};
    TRS=${TRS//Ж/zh} TRS=${TRS//щ/sh\'};
    TRS=${TRS///sh\'} TRS=${TRS//э/je};
    TRS=${TRS//Э/je} TRS=${TRS//ю/ju};
    TRS=${TRS//Ю/ju} TRS=${TRS//я/ja};
    TRS=${TRS//Я/ja} TRS=${TRS//ъ/\`};
    TRS=${TRS//ъ\`} TRS=${TRS//ь/\'};
    TRS=${TRS//Ь/\'}
    hash iconv &> /dev/null && TRS=$(iconv -c -f UTF8 -t ASCII//TRANSLIT <<< "$TRS")
    echo "$TRS" | tr '[:upper:]' '[:lower:]';
}

author=$1

[[ -z "$author" ]] && show_usage $0 && exit 1

translit_author=`translit $author`
dir="speakers_data/$translit_author"

[ ! -d "$dir" ] && mkdir -p "$dir"

touch "$dir/speaker_about.md"
touch "$dir/talk_description.md"

cat  > $dir/data.json <<EOL
{
  "speaker": {
    "name": "$author"
  },
  "talk": {
    "date": "",
    "track": "",
    "time": "",

    "title": "$2"
  }
}
EOL
