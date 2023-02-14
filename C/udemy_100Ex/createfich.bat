@echo off
:: Création de fichier 
Title Création de fichier 
mode con cols=75 lines=30

set /p NbreDeFichiers=Combien de fichiers voulez vous creer ? : %1%
set /a cpt=1

:loop
if %cpt% == %NbreDeFichiers% + 1 (
    goto :end
) else (
    mkdir Section%cpt%
    set /a cpt=%cpt%+1
    goto :loop
)


:end
echo Vos fichiers ont ete creer avec succes.
echo.
pause
exit