declare
fun {Proc X}
   X+1
end
{Browse {Proc 7}}

declare
fun {Keyword}
    choice "java" [] "modeling" [] "language"
    [] "verification" [] "environment"
    [] "tool" [] "system" [] "project"
    [] "extensible" [] "advanced"   
    end
end
declare
fun {Acronym N}
   if N =< 0
   then nil
   else local
           First={Keyword}.1
           Rest={Acronym N-1}
        in
           if {Member First Rest}
           then fail
           else First|Rest
           end
        end
   end
end

declare
fun {FourLetter}
   {Acronym 4}
end
{Browse 2}
{Browse {Member 1 12}}

declare
fun {Filter F Xs}
   case Xs of nil then nil
   else
      if {F Xs.1} then Xs.1|{Filter F Xs.2} else {Filter F Xs.2} end
   end
end

declare
fun {Quicksort Xs}
   case Xs of nil then nil
   else
      local Left Right in
	 Left={Quicksort {Filter fun {$ X} X=<Xs.1 end Xs.2}}
	 Right={Quicksort {Filter fun {$ X} X>Xs.1 end Xs.2}}
	 if {And Left==nil right==nil} then Xs.1
	 elseif Left==nil then Xs.1|Right
	 elseif Right==nil then {List.append Left Xs.1}
	 else {List.append Left Xs.1|Right}
	 end
      end
   end
end

{Browse {Quicksort [2 3 4 2 1]}}

declare
fun {Crossproduct Xs Ys}
   local Aux in
      fun {Aux Xs Ys Temp}
	 case Xs of nil then nil
	 else
	    case Temp of nil then {Aux Xs.2 Ys Ys}
	    else [Xs.1 Temp.1]|{Aux Xs Ys Temp.2}
	    end
	 end
      end
      {Aux Xs Ys Ys}
   end
end

{Browse {Crossproduct [a b c] [1 2 3]}}