
git add .

echo -n "Enter commit message : "
read commitMsg
# echo "Oh! you like $answer!"

git commit -m '$commitMsg'

git push 

echo "deploying.."
python3 deploy.py
echo "Your server has been updated"