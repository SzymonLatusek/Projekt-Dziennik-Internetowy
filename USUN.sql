DROP FUNCTION CalculatePassRate;
CREATE DEFINER=root@localhost FUNCTION CalculatePassRate(forClassId INT) RETURNS FLOAT NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER BEGIN

   DECLARE @passCount INT;
   DECLARE @failCount INT;

   SELECT COUNT() INTO @passCount FROM class c, grades g, tblstudent s WHERE c.SUBJ_ID = g.SUBJ_ID AND g.IDNO = s.IDNO AND REMARKS='Passed' AND CLASS_ID=3;
   SELECT COUNT() INTO @failCount FROM class c, grades g, tblstudent s WHERE c.SUBJ_ID = g.SUBJ_ID AND g.IDNO = s.IDNO AND REMARKS='Failed' AND CLASS_ID=3;
RETURN passCount;
 RETURN passCount/(failCount+passCount);
END