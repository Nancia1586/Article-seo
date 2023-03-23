CREATE OR REPLACE View V_HistoriqueAchat as   
SELECT 
    ach.*,
    mat.designation,
    (ach.prixUnitaire * ach.quantite) as total 
FROM 
    AchatMatiere ach 
    join MatierePremiere mat on ach.matierePremiereId = mat.id;


