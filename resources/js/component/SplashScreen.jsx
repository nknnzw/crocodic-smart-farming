import { motion, AnimatePresence } from "framer-motion";
import { useEffect, useState } from "react";

export default function SplashScreen() {
  const [show, setShow] = useState(true);

  useEffect(() => {
    // Hilangkan splash setelah 3 detik
    const timer = setTimeout(() => {
      setShow(false);
      fetch("/splash/mark-shown", { method: "POST", headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content } })
        .then(() => window.location.href = "/home"); // arahkan ke halaman utama
    }, 3000);
    return () => clearTimeout(timer);
  }, []);

  return (
    <AnimatePresence>
      {show && (
        <motion.div
          initial={{ opacity: 1 }}
          exit={{ opacity: 0, transition: { duration: 0.6 } }}
          className="fixed inset-0 flex flex-col items-center justify-center bg-[#F4FAF4]"
        >
          {/* Lubang tanah */}
          <motion.div
            initial={{ scale: 0 }}
            animate={{ scale: 1, transition: { duration: 0.8, ease: "easeOut" } }}
            className="w-48 h-20 bg-[#3B240B] rounded-full"
          ></motion.div>

          {/* Logo naik */}
          <motion.img
            src="/logo.png"
            alt="Logo"
            className="absolute bottom-40 w-32 h-32 object-contain"
            initial={{ y: 200, opacity: 0 }}
            animate={{
              y: -40,
              opacity: 1,
              transition: { duration: 1.2, ease: "easeOut" },
            }}
          />

          {/* Background berubah warna */}
          <motion.div
            initial={{ backgroundColor: "#F4FAF4" }}
            animate={{ backgroundColor: "#1F4E20" }}
            transition={{ delay: 1.5, duration: 0.8 }}
            className="absolute inset-0 -z-10"
          />
        </motion.div>
      )}
    </AnimatePresence>
  );
}
