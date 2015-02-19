function y = phase1()
roll=rand(1,100);
for j=1:100
	roll(j)=roll(j)+randperm(9)(1);
	roll(j)=roll(j)*10000;
	floor(roll(j));
end	
	filename = "phase1.out";
     	fid = fopen (filename, "w");
    	for i=1:100
	course=randperm(9);
	ass1=ceil(rand()*50);
	exam1=ceil(rand()*50);
	pro1=ceil(rand()*50);
	ass2=ceil(rand()*50);
	exam2=ceil(rand()*50);
	pro2=ceil(rand()*50);
	ass3=ceil(rand()*50);
	exam3=ceil(rand()*50);
	pro3=ceil(rand()*50);
	fprintf(fid,"%d,%d,%d,%d,%d,%d,%d,%d,%d,%d,%d,%d,%d\n",roll(i),course(1),course(2),course(3),ass1,pro1,exam1,ass2,pro2,exam2,ass3,pro3,exam3);
#	fprintf(fid,"%d,",roll(i));
#	fprintf(fid,"%d,",course(1));
#	fprintf(fid,"%d,",course(2));
#	fprintf(fid,"%d,",course(3));
#	fprintf(fid,"%d,",ass1);
#	fprintf(fid,"%d,",pro1);
#	fprintf(fid,"%d,",exam1);
#	fprintf(fid,"%d,",ass2);
#	fprintf(fid,"%d,",pro2);
#	fprintf(fid,"%d,",exam2);
#	fprintf(fid,"%d,",ass3);
#	fprintf(fid,"%d,",pro3);
#	fprintf(fid,"%d\n",exam3);
	end
	fclose (fid);
