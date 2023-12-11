# Stored Procedure + Trigger

create procedure CharitiesbyPE()
begin
    select c.Name,c.Address,
           z.City,z.State,
           c.Zip,c.ProgramExpenses
    from charity as c,zip as z
    where c.Zip=z.Zip
    order by c.ProgramExpenses Desc;
end;

create procedure DonorsbyRC(categoryId int)
begin
   select c.Category,d.LastName,d.FirstName,d.Address,z.City,z.State,d.Zip,d.Telephone
   from category as c,charity as ch,donor as d,gifts as g,zip as z
   where  z.Zip=d.Zip and d.DonorId=g.DonorId and g.CharityId=ch.CharityId and ch.CategoryId=c.CategoryId and c.CategoryId=categoryId
   group by d.DonorId;
end;

create procedure TopGiverofRC(charityId int)
begin
    select c.CharityId, c.Name,d.LastName,d.FirstName,Sum(g.Amount) as Amount
    from charity as c, donor as d,gifts as g
    where c.CharityId=g.CharityId and g.DonorId=d.DonorId and c.CharityId=charityId
    group by d.DonorId
    order by sum(g.Amount) desc;
end;

create procedure FreofGbyD()
begin
    select d.LastName,d.FirstName,count(g.DonorId) as Frequency,avg(g.Amount) as Average_Amount
    from donor as d,gifts as g
    where d.DonorId=g.DonorId
    group by d.DonorID
    order by d.LastName;
end;

create procedure MatchingGifts1(charityid int) #当charityid不为Food for the Hungry charity 显示原值
begin
    select c.Name,g.Date,g.Amount as Matched_Amount, Sum(g.Amount) as Total_Amount
    from charity as c, donor as d,gifts as g
    where c.CharityId=g.CharityId and g.DonorId=d.DonorId and c.CharityId=charityid
    group by g.Date;
end;

create procedure MatchingGifts2()#当charityid为1006 donorid=1时，显示matching amount
begin
select c.Name,g.Date,0.5*g.Amount as Matched_Amount, Sum(g.Amount) as Total_Amount
from charity as c, donor as d,gifts as g
where c.CharityId=g.CharityId and g.DonorId=d.DonorId and c.CharityId=1006 and d.DonorId=1
group by g.Date ;
end;



drop procedure MatchingGifts2;

drop TRIGGER MatchAmount;

CREATE TRIGGER MatchAmount
    AFTER update
    ON donor
    FOR EACH ROW
begin
    #donorid=1表示匿名捐赠，CharityId=1006表示Food For The Hungry Charity
        update gifts set Amount=0.5*sum(Amount),Date=Date
        where gifts.DonorId = 1 AND gifts.CharityId=1006 ;  # 匿名的
end;

drop procedure manage_zip;

create procedure manage_donor(
    did int, DLN varchar (32),
    DFN varchar (32), z varchar (32),
    A varchar (64), T varchar (64)
)
begin
    declare
        cnt int;
    set
        cnt=0;
    select count(1)  # 计算个数
    into cnt
    from donor d
    where did = d.DonorId;
    if
            cnt>0 then  # id相同，仅作修改
        update donor
        set LastName=DLN,
            FirstName=DFN,
            Zip = z,
            Address=A,
            Telephone=T
        where did = DonorId;
    else  # 否则插入新数据
        insert into donor(DonorId,LastName,FirstName, Zip, Address, Telephone)
        values (did,DLN,DFN,z,A,T);
    end if;
end;

create procedure manage_charity(
    cid int, category_id int, N varchar (64),A varchar (64), Z varchar (12),T varchar (64),
    rev varchar (64),pro varchar (64), admin varchar (64), fun varchar (64)
)
begin
    declare
        cnt int;
    set
        cnt=0;
    select count(1)
    into cnt
    from charity c
    where cid = c.CharityId;
    if
            cnt>0 then
        update charity
        set Name=N,
            CategoryId = category_id,
            Address=A,
            Zip=Z,
            Telephone=T,
            Revenue=rev,
            ProgramExpenses=pro,
            AdminExpenses=admin,
            FundraisingExpenses=fun
        where cid = CharityId;
    else
        insert into
            charity( CharityId,CategoryId,Name,Address,Zip,Telephone,Revenue,
                    ProgramExpenses,AdminExpenses,FundraisingExpenses)
        values (cid,category_id,N,A,Z,T,rev,pro,admin,fun);
    end if;
end;

create procedure manage_zip(
    zid int, ccity varchar (64), cstate varchar (64)
)
begin
    declare
        cnt int;
    set
        cnt=0;
    select count(1)
    into cnt
    from zip
    where zid = zip.Zip;
    if
            cnt>0 then
        update zip
        set Zip=zid,
            City=ccity,
            State=cstate
        where zid = Zip;
    else
        insert into
            zip(Zip, City,State)
        values (zid, ccity,cstate);
    end if;
end;

drop trigger charityINSERT;
# Trigger
CREATE TRIGGER charityINSERT
    AFTER INSERT
    ON charity
    FOR EACH ROW
    INSERT INTO logs(UserName, Operation, TableID, TupleId, Time)
    VALUES (user(), 'INSERT', 2, NEW.CharityID, now());

CREATE TRIGGER charityDELETE
    AFTER DELETE
    ON charity
    FOR EACH ROW
    INSERT INTO logs(UserName, Operation, TableID, TupleID, Time)
    VALUES (user(), 'DELETE', 2, OLD.CharityID, now());

CREATE TRIGGER charityUPDATE
    AFTER UPDATE
    ON charity
    FOR EACH ROW
    INSERT INTO logs(UserName, Operation, TableID, TupleID, Time)
    VALUES (user(), 'UPDATE', 2, NEW.CharityID, now());

DROP TRIGGER charityUPDATE;

CREATE TRIGGER donorINSERT
    AFTER INSERT
    ON donor
    FOR EACH ROW
    INSERT INTO logs(UserName, Operation, TableID, TupleID, Time)
    VALUES (user(), 'INSERT', 3, NEW.DonorID, now());

CREATE TRIGGER donorDELETE
    AFTER DELETE
    ON donor
    FOR EACH ROW
    INSERT INTO logs(UserName, Operation, TableID, TupleID, Time)
    VALUES (user(), 'DELETE', 3, OLD.DonorID, now());

CREATE TRIGGER donorUPDATE
    AFTER UPDATE
    ON donor
    FOR EACH ROW
    INSERT INTO logs(UserName, Operation, TableID, TupleID, Time)
    VALUES (user(), 'UPDATE', 3, NEW.DonorID, now());

CREATE TRIGGER giftINSERT
    AFTER INSERT
    ON gifts
    FOR EACH ROW
    INSERT INTO logs(UserName, Operation, TableID, TupleID, Time)
    VALUES (user(), 'INSERT', 4, NEW.GiftID, now());

CREATE TRIGGER giftDELETE
    AFTER DELETE
    ON gifts
    FOR EACH ROW
    INSERT INTO logs (UserName, Operation, TableID, TupleID, Time)
    VALUES (user(), 'DELETE', 4, OLD.GiftID, now());

CREATE TRIGGER giftUPDATE
    AFTER UPDATE
    ON gifts
    FOR EACH ROW
    INSERT INTO logs (UserName, Operation, TableID, TupleID, Time)
    VALUES (user(), 'UPDATE', 4, NEW.GiftID, now());
