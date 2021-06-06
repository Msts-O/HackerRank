while (x, y = gets.split(" ").map(&:to_i)) != [0, 0]
  if x>y
    puts y.to_s + " " + x.to_s
  else
    puts x.to_s + " " + y.to_s
  end
end
